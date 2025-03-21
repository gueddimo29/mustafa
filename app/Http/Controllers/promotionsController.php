<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Storage;

class promotionsController extends Controller
{
    public function index(Request $request){
        $data = Promotion::all();
        $message='';
        $data2 = Subscriber::all()->where('isSubscribe', 1);
        if (Storage::disk('local')->exists('message_last.txt')) {
            // Get the content of the file
            $message = Storage::disk('local')->get('message_last.txt');

        }
        if($request->session()->get('fullname')){
            return view('admin.promotions',['promotions'=>$data,'subscribers'=>$data2,'message'=>$message,'fullname'=>$request->session()->get('fullname')]);
        }else{
            return redirect('login');
        }
    }

    public function add(Request $request){
        $selectedIdsJson = $request->input('selectedIds2');
        \Log::info('Selected IDs:', ['selectedIds' => $request->input('selectedIds2')]);

        // Decode the JSON string into a PHP array
        $selectedIds = json_decode($selectedIdsJson, true);
        if (is_null($selectedIds) || !is_array($selectedIds)) {
            $selectedIds = [];
        }
        $emails = !empty($selectedIds) ? Subscriber::whereIn('id', $selectedIds)->pluck('email')->toArray() : [];
        
        $todayDate = date("Y-m-d");
        $msg = $request->input('msg');
        $filename = 'message_last.txt';
        Storage::disk('local')->put($filename, $msg);
        
        $sujet = $request->input('sujet');
        
        if ($request->hasFile('imagePath')) {
            
            $path_destination = 'public/promotions';
            $image = $request->file('imagePath');
            $image_name = $image->getClientOriginalName();
            $image_name = str_replace(' ', '_', $image_name);
            
            $path = $request->file('imagePath')->storeAs($path_destination, $image_name);
        
            $promotion = new Promotion([
                "imagePath" => '/storage/promotions/' . $image_name,
                "dateInsert" => $todayDate,
                "dateFin" => $request->input('dateFin'),
            ]);
            $promotion->save();
            \Log::info('name of picture:', [$image_name]);
            if (!empty($emails)) {
                foreach ($emails as $email) {
                    $mail_data = [
                        'recipient' => $email,
                        'fromEmail' => "info@hmtours.ca",
                        'fromName' => "HM TOURS",
                        'subject' => $sujet,
                        // 'body' => $msg . '<img src="https://www.hmtours.ca/public/storage/promotions/' . $image_name . '" alt="Promotion">',
                        
                        'body' => 
                        '
<table cellspacing="0" cellpadding="0" border="0" role="presentation" width="900" align="center" style="table-layout:fixed;width:900px">
  <tbody>
    <tr>
      <td>
        <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" align="center" style="table-layout:fixed;width:100%">
          <tbody>
            <tr>
              <td valign="top">
                <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="900" align="center" style="table-layout:fixed;width:900px">
                  <tbody>
                    <tr>
                      <th width="100%" valign="top" style="background-color:#eff2f7;font-weight:normal">
                        <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" style="table-layout:fixed;width:100%">
                          <tbody>
                            <tr>
                              <td valign="top" style="background-color:#eff2f7;padding-left:10px;padding-right:10px">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                                  <tbody>
                                    <tr>
                                      <td align="center">
                                        <table style="table-layout:fixed;min-width:200px">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <img width="200" src="https://www.hmtours.ca/images/Logo-HM-PNG.png" alt="HM Tours Logo" />
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>

        <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="900" align="center" style="table-layout:fixed;width:900px">
          <tbody>
            <tr>
              <td valign="top" style="background-color:#ffffff">
                <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" align="center" style="table-layout:fixed;width:900px">
                  <tbody>
                    <tr>
                      <td style="background-color:#eff2f7;padding-bottom:20px;padding-top:20px">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                          <tbody>
                            <tr>
                              <th width="100%" valign="top" style="font-weight:normal">
                                <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" style="table-layout:fixed;width:900px">
                                  <tbody>
                                    <tr>
                                      <td valign="top">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                                          <tbody>
                                            <tr>
                                              <td align="center">
                                                <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="900" style="table-layout:fixed;">
                                                  <tbody>
                                                    <tr>
                                                      <td valign="top" style="font-family:Open Sans,Arial;font-size:18px;word-break:break-word;line-height:1.5;padding:15px;">
                                                        <div>
                                                          <h3 style="margin:0;color:#1876bb;font-family:Arial,Helvetica,sans-serif;font-size:24px;word-break:break-word">
                                                            <span style="font-family:Arial;font-size:24px">'.$sujet.'</span>
                                                          </h3>
                                                          '.$msg.'
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td align="center" style="font-size:0px;line-height:0px;padding-bottom:15px;">
                                                <img width="100%" border="0" style="display:block;width:100%" src="https://www.hmtours.ca/public/storage/promotions/'.$image_name.'" alt="Promotion Image" />
                                              </td>
                                            </tr>
                                            <tr>
                                              <td align="center" style="padding-bottom:15px;padding-top:15px">
                                                <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="270" style="background-color:#1876bb;border-collapse:separate;border-color:#1876bb;border-radius:4px;border-style:solid;border-width:0px;table-layout:fixed;width:270px">
                                                  <tbody>
                                                    <tr>
                                                      <td height="18" align="center" valign="top" style="word-break:break-word;background-color:#1876bb;border-radius:4px;color:#ffffff;font-family:Open Sans,Arial;font-size:16px;line-height:1.15;padding-bottom:12px;padding-top:12px;text-align:center">
                                                        <a href="https://www.hmtours.ca/reservation" style="font-weight:bold;text-decoration:none;color:#ffffff;font-family:Open Sans,Arial;font-size:16px" target="_blank">
                                                          Réservez maintenant
                                                        </a>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </th>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>

        <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="900" align="center" style="table-layout:fixed;width:900px">
          <tbody>
            <tr>
              <th width="100%" valign="top" style="background-color:#eff2f7;font-weight:normal">
                <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" style="table-layout:fixed;width:100%">
                  <tbody>
                    <tr>
                      <td valign="top" style="background-color:#eff2f7;padding-left:15px;padding-right:15px">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" style="font-family:Open Sans,Arial;color:#3b3f44;font-size:18px;line-height:1.5;padding-top:15px;text-align:center">
                                <div>
                                  <p style="margin:0;font-size:14px">HM TOURS</p>
                                  <p style="margin:0;font-size:14px">3411 Rue Jean Talon Est, H2A 1W7, Montréal</p>
                                  <p style="margin:0;font-size:14px">TEL : 514 376 2777</p>
                                  <p style="margin:0;font-size:14px">E-mail: <a href="mailto:info@hmtours.ca" target="_blank">info@hmtours.ca</a></p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td align="center" valign="top" style="font-family:Open Sans,Arial;color:#3b3f44;font-size:14px;line-height:1.5;text-align:center">
                                <div>
                                  <p style="margin:0;font-size:14px">Cet email a été envoyé à <a href="mailto:'.$email.'" target="_blank">'.$email.'</a></p>
                                  <p style="margin:0;font-size:14px">
                                    <a href="https://hmtours.ca/unsubscribe/'.$email.'" style="color:#1876bb;text-decoration:underline" target="_blank">Se désinscrire</a>
                                  </p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td align="center">
                                <table cellspacing="0" cellpadding="0" border="0" role="presentation" width="100%" align="center" style="table-layout:fixed;width:100%">
                                  <tbody>
                                    <tr>
                                      <td valign="top">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                                          <tbody>
                                            <tr>
                                              <td align="center" style="padding-bottom:15px;padding-top:15px;min-width:150px;">
                                                <a href="https://www.facebook.com/hmtours1" target="_blank">
                                                  <img width="32" src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png" alt="Facebook" />
                                                </a>
                                                <a href="https://www.instagram.com/hmtours_travels/" target="_blank">
                                                  <img width="32" src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" />
                                                </a>
                                                <a href="https://www.tiktok.com/@hm.tours" target="_blank">
                                                  <img width="32" src="https://cdn4.iconfinder.com/data/icons/social-media-flat-7/64/Social-media_Tiktok-512.png" alt="TikTok" />
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </th>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

    ',
                    ];
                    try {
                        \Mail::send([], [], function ($message) use ($mail_data) {
                            $message->to($mail_data['recipient'])
                                ->from($mail_data['fromEmail'], $mail_data['fromName'])
                                ->subject($mail_data['subject'])
                                ->setBody($mail_data['body'], 'text/html'); 
                        });
                    } catch (\Exception $e) {
                        \Log::error("Error sending mail: " . $e->getMessage());
                    }    
                }
            }
        }
        
        return redirect('admin/promotions')->with('success', 'Promotions sent successfully!');


    }
    public function delete($id){
        $data = Promotion::find($id);
        $data->delete();
        return redirect('admin/promotions');
    }
}
