from django.shortcuts import render
from django.utils import timezone
from .models import item

# Create your views here.

def item_list(request):
    items=item.objects.all()
    return render(request,'home.html',{'items':items})

def image(request):
    itemx=item()
    var=RequestContext(request,{'itemx':itemx})
    return render_to_response('home.html',var)
	
def Checkout(request):
    items=item.objects.all()
    return render(request,'Checkout.html',{'items':items})


