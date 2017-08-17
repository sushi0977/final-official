## List Chatroom
List of all active and archived chat rooms

`GET /room`

### Headers
- **ContentType** - Application/json
- **AuthSessionId** - Identifier for current session

### Parameters

### Body
- **roomActive** - Identifies if room is active or archived

### Response
- **roomID** - Identifier for the room
- **roomName** - Name of the room
- **roomCreatedDate** - date the chatroom was created
- **roomLastPostedDate** - date of last message posted to room

### Errors
- **400** - Bad Request (missing parameter)
 - **403** - Forbidden
 - **409** - Conflict (already exists)
 - **418** - I'm a teapot
 - **429** - Too many Requests

### Example Request
`GET /room`

```javascript
{
	roomActive: 1
}
```

### Example Response
`200 OK`

```javascript
{
	roomID: 100,
	roomName: "The Best Room Ever",
	roomCreatedDate: '01/01/2010',
	roomLastPostedDate: '08/15/17'
}
```