"""ECommerce URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path,include
from django.views.generic.base import TemplateView
from Cart import views
from Accounts import views as vie
from form import views as vi
from Accounts.views import signup
from form.views import feedback_form
from . import settings
from django.conf.urls.static import static
from django.contrib.staticfiles.urls import static
from django.contrib.staticfiles.urls import staticfiles_urlpatterns

urlpatterns = [
    path('admin/', admin.site.urls),
    path('Accounts/', include('Accounts.urls')),
    path('Accounts/', include('django.contrib.auth.urls')),
    path('', TemplateView.as_view(template_name='home.html'),name='home'),
    path('home/',views.item_list,name='item_list'),
	path('Checkout/',views.Checkout,name='Checkout'),
	path('Accounts/signup/',vie.SignUp,name='signup'),
	path('form/feedback_form/',vi.feedback_form,name='feedback_form'),
]
"""
urlpatterns+=staticfiles_urlpatterns()
"""
urlpatterns+=static(settings.MEDIA_URL,document_root=settings.MEDIA_ROOT)

