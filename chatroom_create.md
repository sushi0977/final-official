## Create the ChatRoom
New chatrooms are created for users to post messages, ask questions, 
and simply chat with other users about similar subjects.

`POST /room/{roomName}`

### Headers
- **ContentType** - Application/json
- **AuthSessionId** - Identifier for current session

### Parameters
- **roomName** - Room identifier for user 

### Body
- **username** - Username who created the chatroom
- **roomName** - Name of the new chatroom
- **roomActive** - 1 will indicate and active chat room and 0 will 
indicate that it is inactive
- **roomCreatedDate** - get a date stamp

### Response
- **roomName** - Has been created successfully
- **roomID** - identifier for the room

### Errors
- **400** - Bad Request (missing parameter)
- **403** - Forbidden
- **409** - Conflict (already exists)
- **418** - I'm a teapot
- **429** - Too many Requests

### Example Request
`GET /room/NewChatRoom`

```javascript
{
	username: "Test username"
}
```

### Example Response
`201 CREATED`

```javascript
{
	chatRoomId: will be auto generated
	chatRoomName: "The Best Room Ever"
}
```