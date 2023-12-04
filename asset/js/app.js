function createSlug(){
     let title = $('#title').val();
     $('#slug').val(string_to_slug(title));
}
 function string_to_slug (str) {

   // Trim spaces from the beginning and end of the string.
   str = str.replace(/^\s+|\s+$/g, ''); //trim

   // Lowercase the string.
   str = str.toLowerCase();

   // Remove accents, swap ñ for n, etc.
   var from    = "àáäâèéëêìíïîòóöôùúüûῆς·/,:;";
   var to      = "aaaaeeeeiiiioooouuuunc-----";
   for (var i = 0, l = from.length; i < l; i++) {
       str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
   }

   // Remove invalid chars.
   str = str.replace(/[^a-z0-9 -]/g, '')

   // Replace spaces with hyphens.
   .replace(/\s+/g, '-')

   // Replace multiple hyphens with a single hyphen.

   .replace(/-+/g, '-');

   return str; }
