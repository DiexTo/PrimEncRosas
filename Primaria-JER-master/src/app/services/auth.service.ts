import { Injectable } from '@angular/core';
import { Usuario } from '../interfaces/interfaces';
import { Observable } from 'rxjs';

import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';
import { ToastController } from '@ionic/angular';





@Injectable({
  providedIn: 'root'
})
export class AuthService {

  //Manejo del usuario
  usuario:Observable<Usuario>;

  usuarioPureba={
    nombre:'',
    role:''
  }

  constructor(  private httpService: HttpClient,
   private router: Router, private toastCtrl:ToastController
    ) {

    // this.usuario.subscribe();

   

   }


   iniciarSesion(nombre:string, role:string){

    
    this.usuarioPureba={
      nombre,
      role
    }

    

    this.navegar();
   

    //   Iria http del log backend
    //   return new Promise( (resolve, reject) =>{
    //   resolve();

    //   reject();


    // });

   }


   cerrarSesion(){

    this.usuarioPureba={
      nombre:null,
      role:null
    };

    this.router.navigateByUrl('/inicio');

   }

   navegar(){

    switch(this.getUserRole() ){

      //Falta agregar el profe

      case 'admin':
      this.router.navigateByUrl('/admin-dash');

      break;
      case 'profe':
        this.router.navigateByUrl('/profe-dash');
      break;
      case 'padre':
        this.router.navigateByUrl('/padres-dash');
      break;
      case 'director':
        this.router.navigateByUrl('/director-dash');
      break;

      default: 'Usuario no correcto'


    }

   }

   getUserRole(){
     return this.usuarioPureba.role;
   }

   



}
