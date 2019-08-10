<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Announcements;
use App\Calendar;
use App\Mail\Announcement;
use Carbon\Carbon;
use DateTime;
use Response;

class ProposalController extends Controller
{
    public function createp3dk()
    {
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();
        return view('user.createp3dk', array('announcements'=>$announcements, 'events' =>$events));
    }

    public function createlpj()
    {
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();
        return view('user.createlpj', array('announcements'=>$announcements, 'events' =>$events));
    }

    public function storep3dk(Request $request)
    {
        $proker = strtoupper($request->proker);
        $terbilang = strtolower($request->terbilang);
        $namaOK = strtoupper($request->namaOK);

      if($request->input('wakilDekan') != ""){
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template/template_p3dk_fakultas.docx');
        $templateProcessor->setValue('wakilDekan', $request->wakilDekan);
      } else{
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template/template_p3dk_non_fakultas.docx');
      }
     
    
      $templateProcessor->setValue('programKerja', $proker);
      $templateProcessor->setValue('programKerjaBiasa', $request->proker);
      $templateProcessor->setValue('namaOK', $request->namaOK);
      $templateProcessor->setValue('nama', $request->namaKontak);
      $templateProcessor->setValue('nomorKontak', $request->nomorKontak);
      $templateProcessor->setValue('nominal', $request->nominal);
      $templateProcessor->setValue('terbilang', $request->terbilang);
      $templateProcessor->setValue('nimKetuaProker', $request->nimKetuaProker);
      $templateProcessor->setValue('nimSekreProker', $request->nimSekreProker);
      $templateProcessor->setValue('nimKetuaOK', $request->nimKetuaOK);
      $templateProcessor->setValue('ketuaProker', $request->ketuaProker);
      $templateProcessor->setValue('sekreProker', $request->sekreProker);
      $templateProcessor->setValue('ketuaOK', $request->ketuaOK);
      $templateProcessor->setValue('tema', $request->tema);

      $templateProcessor->saveAs('P3DK - '.$proker.'.docx');

      $newDoc = 'P3DK - '.$proker.'.docx';

      /* Add our HTTP Headers */
      // http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
      // http://www.w3.org/Protocols/rfc2616/rfc2616-sec19.html

      // Doc generated on the fly, may change so do not cache it; mark as public or
      // private to be cached.
      header('Pragma: no-cache');
      // Mark file as already expired for cache; mark with RFC 1123 Date Format up to
      // 1 year ahead for caching (ex. Thu, 01 Dec 1994 16:00:00 GMT)
      header('Expires: 0');
      // Forces cache to re-validate with server
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
      // DocX Content Type
      header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
      // Tells browser we are sending file
      header('Content-Disposition: attachment; filename=P3DK - '.$proker.'.docx');
      // Tell proxies and gateways method of file transfer
      header('Content-Transfer-Encoding: binary');
      // Indicates the size to receiving browser
      header('Content-Length: '.filesize($newDoc));

      // Send the file:
      readfile($newDoc);

      // Delete the file if you so choose. BE CAREFULE; YOU MAY NEED TO DO THIS
      // THROUGH YOUR FRAMEWORK:
      unlink($newDoc);

      // End the session. BE CAREFUL; YOU NEED TO DO THIS THROUGH YOUR FRAMEWORK:
      session_write_close();
    }

    public function storelpj(Request $request)
    {
        $proker = strtoupper($request->proker);
        $tema = strtoupper($request->tema);
        $namaOK = strtoupper($request->namaOK);
        $tanggalindo = date('d F Y', strtotime($request->tanggal));

      if($request->input('wakilDekan') != ""){
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template/template_lpj_fakultas.docx');
        $templateProcessor->setValue('wakilDekan', $request->wakilDekan);
      } else{
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template/template_lpj_non_fakultas.docx');
      }
     
    
      $templateProcessor->setValue('programKerja', $proker);
      $templateProcessor->setValue('programKerjaBiasa', $request->proker);
      $templateProcessor->setValue('namaOK', $request->namaOK);
      $templateProcessor->setValue('nama', $request->namaKontak);
      $templateProcessor->setValue('nomorKontak', $request->nomorKontak);
      $templateProcessor->setValue('tanggal', $tanggalindo);
      $templateProcessor->setValue('nimKetuaProker', $request->nimKetuaProker);
      $templateProcessor->setValue('nimSekreProker', $request->nimSekreProker);
      $templateProcessor->setValue('nimKetuaOK', $request->nimKetuaOK);
      $templateProcessor->setValue('ketuaProker', $request->ketuaProker);
      $templateProcessor->setValue('sekreProker', $request->sekreProker);
      $templateProcessor->setValue('ketuaOK', $request->ketuaOK);
      $templateProcessor->setValue('tema', $tema);
      $templateProcessor->setValue('temaBiasa', $request->tema);

      $templateProcessor->saveAs('LPJ - '.$proker.'.docx');

      $newDoc = 'LPJ - '.$proker.'.docx';

      /* Add our HTTP Headers */
      // http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
      // http://www.w3.org/Protocols/rfc2616/rfc2616-sec19.html

      // Doc generated on the fly, may change so do not cache it; mark as public or
      // private to be cached.
      header('Pragma: no-cache');
      // Mark file as already expired for cache; mark with RFC 1123 Date Format up to
      // 1 year ahead for caching (ex. Thu, 01 Dec 1994 16:00:00 GMT)
      header('Expires: 0');
      // Forces cache to re-validate with server
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
      // DocX Content Type
      header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
      // Tells browser we are sending file
      header('Content-Disposition: attachment; filename=LPJ - '.$proker.'.docx');
      // Tell proxies and gateways method of file transfer
      header('Content-Transfer-Encoding: binary');
      // Indicates the size to receiving browser
      header('Content-Length: '.filesize($newDoc));

      // Send the file:
      readfile($newDoc);

      // Delete the file if you so choose. BE CAREFULE; YOU MAY NEED TO DO THIS
      // THROUGH YOUR FRAMEWORK:
      unlink($newDoc);

      // End the session. BE CAREFUL; YOU NEED TO DO THIS THROUGH YOUR FRAMEWORK:
      session_write_close();
    }
    
    public function downloadPanduanP3DK(){
      //PDF file is stored under project/public/download/info.pdf
      $file= public_path(). "/download/PANDUAN P3DK 2019.pdf";

      $headers = array(
                'Content-Type: application/pdf',
              );

      return Response::download($file, 'Panduan P3DK 2019.pdf', $headers);
    }

    public function downloadPanduanLPJ(){
      //PDF file is stored under project/public/download/info.pdf
      $file= public_path(). "/download/PANDUAN LPJ 2019.pdf";

      $headers = array(
                'Content-Type: application/pdf',
              );

      return Response::download($file, 'Panduan LPJ 2019.pdf', $headers);
    }

    public function downloadAlur(){
      //PDF file is stored under project/public/download/info.pdf
      $file= public_path(). "/download/ALUR P3DK & LPJ.pdf";

      $headers = array(
                'Content-Type: application/pdf',
              );

      return Response::download($file, 'ALUR P3DK & LPJ.pdf', $headers);
    }
}
