

public class ListItem 
{
	private int itemID, numberOfItems; 
	private double itemCost;
	private String sellerName, itemName, itemDescription, itemCategory, itemLocation;
	private boolean itemSold;
	
	ListItem ()
	{
		itemID = 0;
		numberOfItems = 0;
		itemCost = 0.00;
		sellerName = ""; 
		itemName = ""; 
		itemDescription = "";
		itemCategory = "";
		itemLocation = "";
		itemSold = true;
	}
	
	ListItem (int id, int num, double cost, String nameUser, String nameItem, boolean sold)
	{
		itemID = id;
		numberOfItems = num;
		itemCost = cost;
		sellerName = nameUser; 
		itemName = nameItem; 
		itemDescription = "";
		itemCategory = "";
		itemLocation = "";
		itemSold = sold;
	}
	
	ListItem (int id, int num, double cost, String nameUser, String nameItem, String desc, String category, String loc, boolean sold)
	{
		itemID = id;
		numberOfItems = num;
		itemCost = cost;
		sellerName = nameUser; 
		itemName = nameItem; 
		itemDescription = desc;
		itemCategory = category;
		itemLocation = loc;
		itemSold = sold;
	}
	
// Accessors
	private int getItemID()
	{
		return itemID;
	}
	
	private int getnumberOfIems()
	{
		return numberOfItems;
	}
	
	private double getItemCost()
	{
		return itemCost;
	}
	
	private String getSellerName()
	{
		return sellerName;
	}
	
	private String getItemName()
	{
		return itemName;
	}
	
	private String getItemDescription()
	{
		return itemDescription;
	}
	
	private String getItemCategory()
	{
		return itemCategory;
	}
	
	private String getItemLocation()
	{
		return itemLocation;
	}		
	
	private boolean getItemSold()
	{
		return itemSold;
	}				
	
	
// Mutators
	private void setItemID(int id)
	{
		itemID = id;
		return;
	}
	
	private void setnumberOfIems(int num)
	{
		numberOfItems = num;
		return;
	}
	
	private void setItemCost(double cost)
	{
		itemCost = cost;
		return;
	}
	
	private void setSellerName(String nameUser)
	{
		sellerName = nameUser;
		return;
	}
	
	private void setItemName(String nameItem)
	{
		itemName = nameItem;
		return;
	}
	
	private void setItemDescription(String desc)
	{
		itemDescription = desc;
		return;
	}
	
	private void setItemCategory(String category)
	{
		itemCategory = category;
		return;
	}
	
	private void setItemLocation(String loc)
	{
		itemLocation = loc;
		return;
	}
	
	private void setItemSold(boolean sold)
	{
		itemSold = sold;
		return;
	}
		
		
// Start of custom methods
	
	public int decrementItemCount()
	{
		int tmp=0;
			
		tmp = numberOfItems--; 
			
		if(tmp == 0)
		{
			setItemSold(true);
		}
		
		return tmp;
	}
		
}
