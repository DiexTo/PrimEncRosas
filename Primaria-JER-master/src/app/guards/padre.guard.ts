import { Injectable } from '@angular/core';
import { CanLoad, Router } from '@angular/router'

import { AuthService } from '../services/auth.service';
import { AlertController, ToastController } from '@ionic/angular';

@Injectable({
  providedIn: 'root'
})
export class PadreGuard implements CanLoad {

  constructor( private authService: AuthService,
    private router: Router, private alertCtrl: AlertController,
    private toastCtrl:ToastController){


    }

canLoad():boolean{

  if(this.authService.getUserRole() === 'padre'){

    this.mostrarToast('Bienvenido', 'success');
    return true;
  }else{

this.presentAlert();
this.router.navigateByUrl('/inicio')

    return false;
  }

}


async mostrarToast(message:string, color:string) {
  const toast = await this.toastCtrl.create({
    message,
    duration: 3000,
    color
  });
  toast.present();
}


async presentAlert() {
  const alert = await this.alertCtrl.create({
    header: 'Estas perdido',
    subHeader: 'No puedes navegar asi',
    message: 'Actualmente no estas autorizado para entrar a este lugar',
    buttons: ['Entendido']
  });

  await alert.present();
}


}
