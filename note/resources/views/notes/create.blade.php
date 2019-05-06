  @extends('layouts.main')
  @section('content')
	<h1 style="text-align: center; color: #ccc" >Notes form ☺☺</h1>
 <form  method="POST" action="{{ route('Note.store') }}" onsubmit="return ValidateForm(this);">
       @csrf
 <script type="text/javascript">
   function ValidateForm(frm) {
    if (frm.Title.value == "") {
       alert('Title is required.'); 
       frm.Title.focus();
       return false; }
    if (frm.user_id.value == "") {
       alert('user_id is required.'); 
       frm.user_id.focus(); 
       return false; }
    if (frm.content.value == "") {
       alert('content is required.'); 
       frm.content.focus(); 
       return false; }
    if (frm.Email.value == "") {
       alert('Email is required.');
       frm.Email.focus();
       return false; }
    if (frm.Email.value.indexOf("@") < 1 || frm.Email.value.indexOf(".") < 1) {
     alert('Please enter a valid email address.'); 
     frm.Email.focus(); 
     return false;
      }
    return true; }
</script>
   <table border="0" cellpadding="5" cellspacing="0">
   <tr><td>
   <label for="user_id"><b>user_id *</b></label><br />
   <input name="user_id" type="text" maxlength="100" style="width: 260px" />
    </td></tr>
    <tr><td>
   <label for="Email"><b>Email *</b></label><br />
   <input name="Email" type="text" maxlength="100" style="width: 260px" />
    </td></tr>
    <tr><td>
   <label for="Title"><b>Title *</b></label><br />
   <input name="Title" type="text" maxlength="100" style="width: 260px" />
    </td></tr>
    <tr><td>
    <label for="content"><b>Content *</b></label><br />
    <textarea name="content">
    </textarea></td> </tr>                 
     <tr> <td colspan="2">
     </td> </tr> <tr> <td colspan="2" style="text-align: center;">
    <input name="skip_submit" type="submit" value="Send Application" />
    </td> </tr>
</table>
</form>  
 @endsection 	
