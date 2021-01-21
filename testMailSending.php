```
<?php
namespace App\Http\Controllers\WEB\V2\Test;

use Illuminate\Http\Request;
use App\Models\V2\PdfparsedTask;
use Carbon\Carbon;
use Mail;

use App\Mail\OldTaskMail;
use App\Http\Controllers\Controller;

class MailTestController extends Controller
{
	public function testMailSending()
	{
        Mail::send('emails.send', ['title' => "title", 'content' => "content"], function ($message)
        {
            $message->to('shohan5917@gmail.com');
			$message->subject("Hello from Test");
        });
		
	   	if (Mail::failures()) {
			return response()->json(['message' => 'Request Failed']);
		}
		else
		{
			return response()->json(['message' => 'Request Success']);
		}
	}
}
```
