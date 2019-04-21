var price=0;

function Adder(cost)
{
	price+=cost;
	console.log(price);
}

function Remove(cost,id)
{
	if (price>=cost)
	{

		price-=cost;
		console.log(price);
		
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
	
	