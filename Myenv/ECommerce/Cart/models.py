from django.db import models
from django.conf import settings
from django.utils import timezone

# Create your models here.

class item(models.Model):
    itemid=models.CharField(max_length=15)
    name=models.CharField(max_length=40)
    price=models.CharField(max_length=40)
    imglink=models.ImageField(upload_to='gallery')
    checked=models.BooleanField(default=False)

    def __str__(self):
        return self.name
