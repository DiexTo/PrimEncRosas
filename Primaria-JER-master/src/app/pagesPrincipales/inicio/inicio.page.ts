import { Component, OnInit } from '@angular/core';
import { AuthService } from 'src/app/services/auth.service';

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.page.html',
  styleUrls: ['./inicio.page.scss'],
})
export class InicioPage implements OnInit {



  constructor( private authService: AuthService) {


   }

   nombre:string='';
   role:string='';

   iniciarSesion(){

    this.authService.iniciarSesion(this.nombre, this.role);
   }

  ngOnInit() {


  }

}
