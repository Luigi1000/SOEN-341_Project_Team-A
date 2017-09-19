

public class RegisteredUser 
{
	private int userID;
	private String userName, userPassword, userEMail, userLocation;
	
	RegisteredUser()
	{
		userID = 0;
		userName = ""; 
		userPassword = ""; 
		userEMail = "";
		userLocation = "";
	}
	
	RegisteredUser(int id, String name, String password, String eMail)
	{
		userID = id;
		userName = name; 
		userPassword = password; 
		userEMail = eMail;
		userLocation = "";
	}	
	
	RegisteredUser(int id, String name, String password, String eMail, String loc)
	{
		userID = id;
		userName = name; 
		userPassword = password; 
		userEMail = eMail;
		userLocation = loc;
	}

// Accessors 
	private int getItemID()
	{
		return userID;
	}
			
	private String getUserName()
	{
		return userName;
	}
			
	private String getPassword()
	{
		return userPassword;
	}
			
	private String setUserEMail()
	{
		return userEMail;
	}
			
	private String setUserLocation()
	{
		return userLocation;
	}	
	
// Mutators
	private void setItemID(int id)
	{
		userID = id;
		return;
	}
		
	private void setUserName(String name)
	{
		userName = name;
		return;
	}
		
	private void setPassword(String password)
	{
		userPassword = password;
		return;
	}
		
	private void setUserEMail(String eMail)
	{
		userEMail = eMail;
		return;
	}
		
	private void setUserLocation(String loc)
	{
		userLocation = loc;
		return;
	}

		

		
// Start of custom methods
	

		
}
