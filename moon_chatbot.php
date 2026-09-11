<!DOCTYPE html>
<html>
<head>
  <title>Moon Chatbot</title>
</head>
<body>

<h1>Moon AI Chatbot 🌕</h1>

<script type="module">
  import Chatbox from 'https://cdn.jsdelivr.net/npm/@chaindesk/embeds@latest/dist/chatbox/index.js';

  const widget = await Chatbox.initBubble({
    agentId: 'cmnts4x9v1r5rf9m3ilc5g0xk',
    
    // optional 
    // If provided will create a contact for the user and link it to the conversation
    contact: {
      firstName: 'Cedric',
      lastName: 'Zapata',
      email: 'customer@email.com',
      phoneNumber: '+33612345644',
      userId: '42424242',
    },
    // optional
    // Override initial messages
    initialMessages: [
      'Hello Georges how are you doing today?',
      'How can I help you ?',
    ],
    // optional
    // Provided context will be appended to the Agent system prompt
    context: "The user you are talking to is Cedric Zapata. Start by Greeting him by his name.",
  });

  // open the chat bubble
  widget.open();

  // close the chat bubble
  widget.close()

  // or 
  widget.toggle()
</script>

</body>
</html>