object Form1: TForm1
  Left = 0
  Top = 0
  Caption = 'Form1'
  ClientHeight = 300
  ClientWidth = 635
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Button1: TButton
    Left = 249
    Top = 163
    Width = 75
    Height = 25
    Caption = 'Connexion'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 112
    Top = 69
    Width = 75
    Height = 25
    Caption = 'Cloche 1'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 202
    Top = 69
    Width = 75
    Height = 25
    Caption = 'Cloche 2'
    TabOrder = 2
    OnClick = Button3Click
  end
  object Button4: TButton
    Left = 296
    Top = 69
    Width = 75
    Height = 25
    Caption = 'Cloche 3'
    TabOrder = 3
    OnClick = Button4Click
  end
  object Button5: TButton
    Left = 392
    Top = 69
    Width = 75
    Height = 25
    Caption = 'Cloche 4'
    TabOrder = 4
    OnClick = Button5Click
  end
  object Button6: TButton
    Left = 249
    Top = 248
    Width = 75
    Height = 25
    Caption = 'Fermeture'
    TabOrder = 5
    OnClick = Button6Click
  end
  object Edit1: TEdit
    Left = 226
    Top = 221
    Width = 121
    Height = 21
    TabOrder = 6
    OnKeyDown = Edit1KeyDown
  end
  object Button7: TButton
    Left = 194
    Top = 116
    Width = 75
    Height = 25
    Caption = 'M'#233'lodie 1'
    TabOrder = 7
    OnClick = Button7Click
  end
  object Button8: TButton
    Left = 305
    Top = 116
    Width = 75
    Height = 25
    Caption = 'M'#233'lodie 2'
    TabOrder = 8
    OnClick = Button8Click
  end
  object IdTCPServer1: TIdTCPServer
    Active = True
    Bindings = <>
    DefaultPort = 4318
    OnConnect = IdTCPServer1Connect
    OnExecute = IdTCPServer1Execute
    Left = 496
    Top = 248
  end
end
