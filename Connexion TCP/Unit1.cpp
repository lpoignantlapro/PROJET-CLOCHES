//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "Unit1.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
	: TForm(Owner)
{
}
//---------------------------------------------------------------------------
void __fastcall TForm1::IdTCPServer1Connect(TIdContext *AContext)
{
Memo1->Lines->Add("L'adresse ip du client :");
  Memo1->Lines->Add(AContext->Binding->PeerIP);
  Memo1->Lines->Add("Le port du client est :");
  Memo1->Lines->Add(IntToStr(AContext->Binding->PeerPort));

  AContext->Connection->IOHandler->WriteLn("$PGA;56465;46;546;546;456;465;46");
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button1Click(TObject *Sender)
{
Label1->Caption="Le serveur est en cours d'ex�cution";
IdTCPServer1->Active=true;
Memo1->Visible=true;
Button1->Visible=false;
Button2->Visible=true;

}
//---------------------------------------------------------------------------



void __fastcall TForm1::IdTCPServer1Execute(TIdContext *AContext)
{
Label1->Caption="Le serveur a re�u";
Sleep(3000);
Label1->Caption="Le serveur est en cours d'ex�cution";
}


//---------------------------------------------------------------------------



void __fastcall TForm1::Button2Click(TObject *Sender)
{
	IdTCPServer1->Active=false;
	Memo1->Visible=false;
	Button2->Visible=false;
	Button1->Visible=true;
	Label1->Caption="Le serveur est �teint";
}
//---------------------------------------------------------------------------

