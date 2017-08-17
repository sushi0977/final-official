## User Add
Users need to be able to added

`GET /room`

### Headers
- **ContentType** - Application/json
- **AuthSessionId** - Identifier for current session

### Parameters

### Body
- **userID* - Identidies the user

### Response
- **username** - New user name
- **email** - New user email

### Errors
- **400** - Bad Request (missing parameter)
 - **403** - Forbidden
 - **409** - Conflict (already exists)
 - **418** - I'm a teapot
 - **429** - Too many Requests

### Example Request
`GET /account/`

```javascript
{
    UserName: NewleyCreatedUserName,
    UserEmail: Newemai@email.awesome.com
}
```

### Example Response
`200 OK`

```javascript
{
	UserName: Newley Created User Name,
        UserEmail:Newemai@emai.awesome.com
	
}
