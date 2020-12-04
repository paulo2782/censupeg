<?php

namespace App\Exports;

use App\Call;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ExportCalls implements  WithHeadings, ShouldAutoSize, WithEvents, WithMapping, FromCollection
{

 	 

	protected $params = [];

   public function __construct($params)
   {
      $this->params = $params;
   }

   public function collection()
   {
      return $this->params;
   }
 	
 	public function map($Call): array
    {
        $rows = [];
            foreach ($Call->contact as $listContact) {
				 array_push($rows,[
                    $Call->id,
                    date('d-m-Y',strtotime($Call->date_contact)),
                    $Call->contact->name,
                    $Call->contact->email,
                    $Call->contact->phone,
                    $Call->contact->contact_origin,
                    $Call->course->course,
                    $Call->status,
                    date('d-m-Y',strtotime($Call->date_return)),
                    $Call->user->name,                    
                    $Call->additional_information,

                ]);
            return $rows;
            	 
            }

    }


    public function headings(): array
    {
        return [
        	'#',
            'Data / hora contato',
            'Nome',
            'Email',
            'Telefone',
            'Origem do contato',
            'Curso interesse',
            'Status',
            'Data / hora retorno',
            'Operador',
            'Informações adicionais'
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
    
}
