import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AccionesTabPageRoutingModule } from './acciones-tab-routing.module';

import { AccionesTabPage } from './acciones-tab.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AccionesTabPageRoutingModule
  ],
  declarations: [AccionesTabPage]
})
export class AccionesTabPageModule {}
