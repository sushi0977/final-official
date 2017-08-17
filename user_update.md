## Update User Profile
Update the profile for a specific user account

`PUT /account/{userId}/profile`

### Headers
- **AuthSessionId** - Identifier for current session
- **AuthSessionSecret** - Secret for current session

### Parameters
- **userId** - Identifier for current user

### Body
- **username** - Username to update to
- **email** - Email address to update to

### Response
- **userId** - Identifier for the user

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
	username: "NewUsername",
	email: "Email@Email.com"
}
```

### Example Response
`200 OK`

```javascript
{
	username: "NewUsername",
    	email: "Email@Email.com"
}
```