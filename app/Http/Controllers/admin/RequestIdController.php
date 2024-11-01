<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RequestId;
use BaconQrCode\Encoder\QrCode;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;

class RequestIdController extends Controller
{

    public function index()
    {
        $request_ids = RequestId::orderBy('created_at', 'desc')->get();
        return view('admin.request_ids.index', compact('request_ids'));
    }
    public function create()
    {
        return view('admin.request_ids.create');
    }

    public function store(Request $request)
    {
        // dd($request);    
        $data = $request->validate([
            'full_name' => 'required|string',
            'phone' => 'required|string',
            'role' => 'required|string',
            'address' => 'required|string',
            'profile' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $manager = new ImageManager(new Driver());
        $sample = $manager->read(public_path('img/id_sample.png'));
        $sample->text($request->full_name, 420, 180, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(40);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text($request->phone, 420, 270, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(40);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text($request->role, 420, 360, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(40);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text($request->address, 420, 450, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(40);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });

        function generateRandomId($prefix = 'SUE', $length = 4) { 
            $randomNumber = str_pad(mt_rand(1, 9999), $length, '0', STR_PAD_LEFT); 
            if (count(RequestId::where('uuid', $prefix. '/' .$randomNumber)->get()) > 0) {
                return generateRandomId();
            }
            return $prefix . '/' . $randomNumber;
        }
        
        $randomId = generateRandomId();
        $sample->text($randomId, 170, 570, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(30);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });
        $path = $request->file('profile')->store('id_profiles', 'public');
        $profile = $manager->read('storage/'.$path)->resize(300, 400);
        $sample->place($profile, 'top-left', 30, 150);
        
        
        
        $data['uuid'] = $randomId;
        $data['profile'] = $path;
        $data['qr_code'] = null;
        
        $requestId = RequestId::create($data);
        //Generate qrcode
        $qr_code_path = public_path('qr_codes/'.str_replace('/', '_' , $requestId->uuid) . '.png');
        FacadesQrCode::format('png')->size(100)->generate(route('id.show', $requestId->id), $qr_code_path);
        $qr_code = $manager->read($qr_code_path);
        $sample->place($qr_code, 'top-right', 30, 150);
        $sample->save(public_path('id_cards/' . str_replace('/', '_' , $requestId->uuid) . '.png'));
        dd($sample);
    }

}
