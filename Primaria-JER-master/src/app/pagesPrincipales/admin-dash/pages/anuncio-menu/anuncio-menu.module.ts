import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AnuncioMenuPageRoutingModule } from './anuncio-menu-routing.module';

import { AnuncioMenuPage } from './anuncio-menu.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AnuncioMenuPageRoutingModule
  ],
  declarations: [AnuncioMenuPage]
})
export class AnuncioMenuPageModule {}
