<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RequestId;
use BaconQrCode\Encoder\QrCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Picqer\Barcode\BarcodeGeneratorPNG;
use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;

class RequestIdController extends Controller
{

    public function index()
    {   
        $compact= ['request_ids'];
        if (request()->input('s')) {
            $s = request()->input('s');
            $request_ids = RequestId::where('uuid', 'LIKE', "%{$s}%")
                                    ->orwhere('full_name_eng', 'LIKE', "%{$s}%")
                                    ->orwhere('full_name_amh', 'LIKE', "%{$s}%")
                                    ->orwhere('phone', 'LIKE', "%{$s}%")
                                    ->orwhere('office_address_eng', 'LIKE', "%{$s}%")
                                    ->orwhere('office_address_amh', 'LIKE', "%{$s}%")
                                    ->orwhere('role_eng', 'LIKE', "%{$s}%")
                                    ->orwhere('role_amh', 'LIKE', "%{$s}%")->get();
            $compact[1] = 's';
        } else {
            $request_ids = RequestId::orderBy('created_at', 'desc')->get();
        }
        
        return view('admin.request_ids.index', compact($compact));
    }

    public function create()
    {
        return view('admin.request_ids.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name_amh' => 'required|string',
            'full_name_eng' => 'required|string',
            'phone' => 'required|string',
            'role_amh' => 'required|string',
            'role_eng' => 'required|string',
            'office_address_amh' => 'required|string',
            'office_address_eng' => 'required|string',
            'nationality_amh' => 'required|string',
            'nationality_eng' => 'required|string',
            'profile' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $manager = new ImageManager(new Driver());
        $sample = $manager->read(public_path('img/id_sample.png'));
        $sample->text($request->full_name_amh, 350, 160, function($font) {
            $font->file(public_path('/admin-resources/font/AbyssinicaSIL-Regular.ttf'));
            $font->size(30);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text(strtoupper($request->full_name_eng), 350, 185, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $sample->text($request->role_amh, 350, 235, function($font) {
            $font->file(public_path('/admin-resources/font/AbyssinicaSIL-Regular.ttf'));
            $font->size(30);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text(strtoupper($request->role_eng), 350, 261, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text($request->office_address_amh, 350, 315, function($font) {
            $font->file(public_path('/admin-resources/font/AbyssinicaSIL-Regular.ttf'));
            $font->size(30);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text(strtoupper($request->office_address_eng), 350, 341, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $sample->text($request->nationality_amh, 350, 395, function($font) {
            $font->file(public_path('/admin-resources/font/AbyssinicaSIL-Regular.ttf'));
            $font->size(30);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $sample->text(strtoupper($request->nationality_eng), 350, 425, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $sample->text($request->phone, 350, 474, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        function generateRandomId($prefix = 'SUE', $length = 3) { 
            $randomNumber = str_pad(mt_rand(1, 999), $length, '0', STR_PAD_LEFT); 
            if (count(RequestId::where('uuid', $prefix. '/' .$randomNumber)->get()) > 0) {
                return generateRandomId();
            }
            $year = Carbon::now()->month > 9 ? date('Y')-7 : date('Y')-8;

            $suffix = substr($year, -2);

            return $prefix . '/' . $randomNumber. '/' . $suffix ;
        }
        
        
        $randomId = generateRandomId($prefix = $request->prefix);
        $sample->text($randomId, 40 , 490, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size('25');
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $generator = new BarcodeGeneratorPNG();
        $barcode = $generator->getBarcode($randomId, $generator::TYPE_CODE_128, 1.5, 30);
        $sample->place($barcode, 'top-left', 40, 520);

        $path = $request->file('profile')->store('id_profiles', 'public');
        $profile = $manager->read('storage/'.$path)->resize(322, 320);
        $sample->place($profile, 'top-left', 5, 139);
        
        
        
        $data['uuid'] = $randomId;
        $data['profile'] = $path;
        $data['qr_code'] = null;
        $data['slug'] = str_replace('/', '_' , $randomId);
        
        $requestId = RequestId::create($data);

        $qr_code_path = public_path('qr_codes/'.str_replace('/', '_' , $requestId->uuid) . '.png');
        FacadesQrCode::format('png')->size(165)->generate(route('id.show', $requestId->slug), $qr_code_path);
        $qr_code = $manager->read($qr_code_path);
        $requestId->qr_code = $qr_code_path;
        $requestId->save();
        $sample->place($qr_code, 'top-left', 820, 390);
        $sample->save(public_path('id_cards/' . str_replace('/', '_' , $requestId->uuid) . '.png'));
        return redirect(route('admin.requestIds.index'));
    }
    
    public function show(RequestId $request_id)
    {
        return view('id', compact('request_id'));
        
    }
    public function edit(RequestId $request_id)
    {
        return view('admin.request_ids.edit', compact('request_id'));
    }
    
    public function update(RequestId $request_id, Request $request)
    {
        $data = $request->validate([
            'full_name_amh' => 'required|string',
            'full_name_eng' => 'required|string',
            'phone' => 'required|string',
            'role_amh' => 'required|string',
            'role_eng' => 'required|string',
            'office_address_amh' => 'required|string',
            'office_address_eng' => 'required|string',
            'nationality_amh' => 'required|string',
            'nationality_eng' => 'required|string',
            'profile' => 'image|mimes:jpeg,png,jpg',
        ]);
        File::delete(public_path('id_cards/'.$request_id->uuid.'.png'));
        $manager = new ImageManager(new Driver());
        $sample = $manager->read(public_path('img/id_sample.png'));
        $sample->text($request->full_name_amh, 350, 160, function($font) {
            $font->file(public_path('/admin-resources/font/AbyssinicaSIL-Regular.ttf'));
            $font->size(30);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text(strtoupper($request->full_name_eng), 350, 185, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $sample->text($request->role_amh, 350, 235, function($font) {
            $font->file(public_path('/admin-resources/font/AbyssinicaSIL-Regular.ttf'));
            $font->size(30);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text(strtoupper($request->role_eng), 350, 261, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text($request->office_address_amh, 350, 315, function($font) {
            $font->file(public_path('/admin-resources/font/AbyssinicaSIL-Regular.ttf'));
            $font->size(30);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text(strtoupper($request->office_address_eng), 350, 341, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $sample->text($request->nationality_amh, 350, 395, function($font) {
            $font->file(public_path('/admin-resources/font/AbyssinicaSIL-Regular.ttf'));
            $font->size(30);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $sample->text(strtoupper($request->nationality_eng), 350, 425, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $sample->text($request->phone, 350, 474, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size(25);
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
        });
        
        if ($request->hasFile('profile')) {
            File::delete(public_path('storage/'.$request_id->profile));
            $path = $request->file('profile')->store('id_profiles', 'public');
            $data['profile'] = $path;
        } else {
            $path = $request_id->profile;
        }
        
        $sample->text($request_id->uuid, 40 , 490, function($font) {
            $font->file(public_path('/admin-resources/font/Nunito-Regular.ttf'));
            $font->size('25');
            $font->color('#000');
            $font->align('start');
            $font->valign('top');
            
        });

        $generator = new BarcodeGeneratorPNG();
        $barcode = $generator->getBarcode($request_id->uuid, $generator::TYPE_CODE_128, 1.5, 30);
        $sample->place($barcode, 'top-left', 40, 520);

        $profile = $manager->read('storage/'.$path)->resize(322, 320);
        $sample->place($profile, 'top-left', 5, 139);
        
        $request_id->update($data);

        $qr_code_path = public_path('qr_codes/'.str_replace('/', '_' , $request_id->uuid) . '.png');
        $qr_code = $manager->read($qr_code_path);
        $request_id->qr_code = $qr_code_path;
        $request_id->save();
        $sample->place($qr_code, 'top-left', 820, 390);
        $sample->save(public_path('id_cards/' . str_replace('/', '_' , $request_id->uuid) . '.png'));
        return redirect(route('admin.requestIds.index'));
    }

    public function destroy(RequestId $request_id)
    {
        File::delete(public_path('storage/'.$request_id->profile));
        File::delete(public_path('id_cards/' . str_replace('/', '_' , $request_id->uuid) . '.png'));
        File::delete(public_path('qr_codes/' . str_replace('/', '_' , $request_id->uuid) . '.png'));
        $request_id->delete();
        return redirect(route('admin.requestIds.index'));
    }
}
