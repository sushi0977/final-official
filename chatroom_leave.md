## Leave Chatroom
Users need to be able to leave a chatroom at any time

`DELETE /roomUser/{roomUserID}`

### Headers
- **ContentType** - Application/json
- **AuthSessionId** - Identifier for current session

### Parameters
- **RoomUserID** - Identifier for current user in the room

### Body
- **userID** - This is auto generated
- **roomID** - ID for the the room

### Response
- **userId** - Identifier for the user

### Errors
- **400** - Bad Request (missing parameter)
 - **403** - Forbidden
 - **409** - Conflict (already exists)
 - **418** - I'm a teapot
 - **429** - Too many Requests

### Example Request
`DELETE /roomUser/`

```javascript
{
	roomUserID: 100,
	userId: 555,
	roomID: 1
}
```

### Example Response
`200 OK`

```javascript
{
	userId: Ny User is awesome
}
```
