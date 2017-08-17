## Send Message
Users are able to send a message within a chat room

`POST /message/{roomUserID}/{messageText}`

### Headers
- **ContentType** - Application/json
- **AuthSessionId** - Identifier for current session

### Parameters
- **roomUserID** - Identifier for current user in a chatroom
- **messageText** - Message to be posted to the chatroom

### Body
- **userID** - Identifier for the current user
- **roomID** - Identifier for the room to post to
- **messageText** - Message to be added to the chat-room
### Response
- **messageID** - Identifier for the message

### Errors
- **400** - Bad Request (missing parameter)
 - **403** - Forbidden
 - **409** - Conflict (already exists)
 - **418** - I'm a teapot
 - **429** - Too many Requests


### Example Request
`POST /message/`

```javascript
{
	userID: 911,
	roomID: 119,
	messageText: "This is a test of in case of an emergency"
}
```

### Example Response
`200 OK`

```javascript
{
	messageId: 9999
}
```
