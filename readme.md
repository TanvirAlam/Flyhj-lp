## About Flyhjælp task

Demo:
![Demo](https://github.com/TanvirAlam/Flyhjaelp/tree/master/public/img/demo.gif "Demo")

1.  Install a fresh version of Laravel
2.  Seed the database with some options(id, key, value, created_at, updated_at). The option modal will be a modal to retrieve options for the website.
3.  Make some API routes to retrieve, update and delete options.
4.  In the welcome.blade.php show a vue Component which is a table with rows(each row should be its own component to). Each rows has the following columns “Key” ,”Value”, “Actions”
5.  Load the table with one row for each option in the database, get the options via a get call(Preferable save the data and access it via Vuex, but thats not required)
6.  The actions column should display a “Delete" and “Edit" button. When the “Delete" is pressed the row should be deleted with an animation(Fade or something different), and a delete request send to the API to delete that option.
7.  If “Edit” is pressed the “Delete" and “Edit" button should disappear and a “Save” and “Cancel” button appear. Also the value should change from text to an input which value is the current
8.  If “Cancel" is pressed the value in the input should be set back to the initial value before edit, and the “Save" and “Cancel” buttons should hide. The “Edit” and “Delete” button should appear.
9.  If “Save" is pressed the new value should be saved via a put API call, and the input, “Save" and “Cancel” should be hidden. Show text, “Edit" and “Delete" instead.

10. Extra assignment, show loading screen while ajax calls are finishing, display a success notification on save and delete.
