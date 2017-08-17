## Join Chat Room
Allows users to join a chatroom

`POST /roomUser/{userID}/{roomID}`

### Headers
- **ContentType** - Application/json
- **AuthSessionID** - Identifier for current session

### Parameters
- **userID** - User identifies themself
- **roomID** - ID for the the room

### Body
- **roomUserJoinedDate** - date user joined the room


### Response
- **roomUserID** - Identifier for the room and user
- **accessToken** - Token allowing access to the room for the user

### Errors
- **400** - Bad Request (missing parameter)
 - **403** - Forbidden
 - **409** - Conflict (already exists)
 - **418** - I'm a teapot
 - **429** - Too many Requests

### Example Request
`POST /roomUser/`

```javascript
{
	userID: 100,
	roomID: 1,
	roomUserJoinedDate: '08/09/2017'
}
```

### Example Response
`200 OK`

```javascript
{
	roomUserID: 999,
	accessToken: "555f-2352-5557f"
}
```