## TASK 1: UNDERSTAND THE FLOW 

When a user visits '/emails', Laravel handles it using a GET route and loads the Blade view, including any emails that were previously saved in the session. The page shows a form that uses the POST method and includes a '@csrf' token for security, all pointing to the same 
'/emails' route. When the user submits the form, the POST route takes the input, saves the email into the session, and then redirects back to the GET route. After the redirect, the page reloads and displays the updated list of emails from the session. This flow, known as the Redirect-After-POST pattern, helps prevent the form from being submitted multiple times if the user refreshes the page.


------------------------

## REFLECTION QUESTIONS:

**1. What is the difference between GET and POST?**
GET is used when you just want to fetch or view data, while POST is used when you want to send data to the server, like submitting a form.

**2. Why do we use @csrf in forms?**
We use @csrf to protect the form from unauthorized or malicious requests by making sure the request actually comes from our application.

**3. What is session used for in this activity?**
In this activity, the session is used to temporarily store the emails so they stay saved even after refreshing the page.

**4. What happens if the session is cleared?**
If the session is cleared, all the saved emails are removed and the list goes back to being empty.