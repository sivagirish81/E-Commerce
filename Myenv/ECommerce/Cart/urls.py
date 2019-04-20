from django.urls import path
from . import views

urlpatterns=[
    path('Cart/<int:pk>/',views.Cart_detail,
    ]
