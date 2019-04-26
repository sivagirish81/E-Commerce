var price=0;
var itemobj={item1:0,item2:0,item3:0,item4:0,item5:0};
var t_names=['Superman T-Shirt','Flash T-Shirt','Batman T-Shirt','Flash Special T-Shirt','Phoenix T-Shirt']

function Adder(cost,id)
{
    if (id==1000)
    {
      itemobj.item1+=1;
      price+=cost;
      alert("1 Superman T-Shirt Bought");
    }
    if (id==1001)
    {
      itemobj.item2+=1;
      price+=cost;
      alert(" 1 Flash T-Shirt Bought");
    }
    if (id==1002)
    {
      itemobj.item3+=1;
      price+=cost;
      alert("1 Batman T-Shirt Bought");
    }
    if (id==1003)
    {
      itemobj.item4+=1;
      price+=cost;
      alert("1 Flash Special T-Shirt Bought");
    }
    if (id==1004)
    {
      itemobj.item5+=1;
      price+=cost;
      alert("1 Phoenix T-Shirt Bought");
    }
	//alert("1 Superman T-Shirt Bought");
	//console.log(price);
	//alert("Item Added");
}

function Remove(cost,id,count)
{
    if (id==1000 && itemobj.item1>=1)
    {
        price-=cost;
        itemobj.item1-=1;
        alert("1 Item Removed from cart");
    }
    else if (count==0)
    {
        alert("You must buy the item first");
    }
    if (id==1001 && itemobj.item2>=1)
    {
        price-=cost;
        itemobj.item2-=1;
        alert("1 Item Removed from cart");
    }
    else if (count==1)
    {
        alert("You must buy the item first");
    }
    if (id==1002 && itemobj.item3>=1)
    {
        price-=cost;
        itemobj.item3-=1;
        alert("1 Item Removed from cart");
    }
    else if (count==2)
    {
        alert("You must buy the item first");
    }
    if (id==1003 && itemobj.item4>=1)
    {
        price-=cost;
        itemobj.item4-=1;
        alert("1 Item Removed from cart");
    }
    else if (count==3)
    {
        alert("You must buy the item first");
    }
    if (id==1004 && itemobj.item5>=1)
    {
        price-=cost;
        itemobj.item5-=1;
        alert("1 Item Removed from cart");
    }
    else if (count==4)
    {
        alert("You must buy the item first");
    }
/*	if (price>=cost)
	{

		price-=cost;
		console.log(price);
		alert("Item Removed");

	}
	else
	{
		alert("You have to buy an item first");
	}*/
}

function Checkout()
{
    var str=" "
    k=0
    for (i in itemobj)
    {
        if (itemobj[i]>=1)
        {
            str+=t_names[k]+"          X "+itemobj[i]+"\n";
        }
        k+=1;
    }

	str+="Total Amount to be paid="+price;
	alert(str);
}

