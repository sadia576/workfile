namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Save to database
        $contact = Contact::create($request->all());

        // Send email notification
        Mail::to('admin@example.com')->send(new ContactMessageMail($contact));

        return back()->with('success', 'Your message has been sent!');
    }
}
