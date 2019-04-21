from django.db import models

# Create your models here.
class Feedback(models.Model):
	customer_name=models.CharField(max_length=20)
	email=models.EmailField()
	feedback=models.TextField()
	
	def __str__(self):
		return self.customer_name