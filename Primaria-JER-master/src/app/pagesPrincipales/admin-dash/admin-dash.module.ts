import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AdminDashPageRoutingModule } from './admin-dash-routing.module';

import { AdminDashPage } from './admin-dash.page';

import { FormularioComponent } from 'src/app/components/formulario/formulario.component';


@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AdminDashPageRoutingModule
  ],
  declarations: [AdminDashPage,
    FormularioComponent
  ]
})
export class AdminDashPageModule {}
