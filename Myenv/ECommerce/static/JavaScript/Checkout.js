var price=0;

function Adder(cost)
{
	price+=cost;
	console.log(price);
	alert("Item Added");
}

function Remove(cost,id)
{
	if (price>=cost)
	{

		price-=cost;
		console.log(price);
		alert("Item Removed");

	}
	else
	{
		alert("You have to buy an item first");
	}
}

function Checkout()
{
	alert("Total Amount to be paid="+price);
}

