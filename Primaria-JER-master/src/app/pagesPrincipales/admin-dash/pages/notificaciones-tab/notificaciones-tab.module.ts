import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { NotificacionesTabPageRoutingModule } from './notificaciones-tab-routing.module';

import { NotificacionesTabPage } from './notificaciones-tab.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    NotificacionesTabPageRoutingModule
  ],
  declarations: [NotificacionesTabPage]
})
export class NotificacionesTabPageModule {}
