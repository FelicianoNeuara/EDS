<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Matriculation;
use Illuminate\Http\Request;

// class StripeController extends Controller
// {
//     public function checkout(string $matricula_id, string $curso_id)
//     {
//         if(!$resultado = Course::find($curso_id)) // buscando os dados do id na base de dados suportes
//         {
//             return back(); // para voltar na mesma pagina
//         }
//         if(!$resultado1 = Matriculation::find($matricula_id)) // buscando os dados do id na base de dados suportes
//         {
//             return back(); // para voltar na mesma pagina
//         }
//         //dd($resultado1);


//         return view('livewire.checkout', compact('resultado', 'resultado1'));
//     }

//     // public function session(Request $request)
//     // {
//     //     \Stripe\Stripe::setApiKey(config('Stripe.sk'));

//     //     $productname = $request->get('productname');
//     //     $totalprice = $request->get('total');
//     //     $two0 = "00";
//     //     $total = "$totalprice$two0";
//     //     $session = \Stripe\Checkout\Session::create(
//     //         [
//     //             'line_items' =>
//     //             [
//     //                 [
//     //                     'price_data' => [
//     //                         'currency' => 'USD',
//     //                         'product_data' => [
//     //                             "name" => $productname,
//     //                         ],
//     //                         'unit_amount' => $total,
//     //                     ],
                       
//     //                 ],
            
//     //             ],
//     //             'mode' => 'payment',
//     //             'success_url' => route('success'),
//     //             'cancel_url' => route('checkout'),
//     //         ]
//     //     );
//     //     return redirect()->away($session->url);
//     // }

//     public function session(Request $request, string $id)
//     {
//         if(!$resultado1 = Matriculation::find($id)) // buscando os dados do id na base de dados suportes
//         {
//             return back(); // para voltar na mesma pagina
//         }
//         // dd($resultado1);

//         \Stripe\Stripe::setApiKey(config('Stripe.sk'));

//         $productname = $request->get('productname');
//         $totalprice = $request->get('total');
//         $two0 = "00";
//         $total = "$totalprice$two0";

//         $paymentIntent = \Stripe\PaymentIntent::create([
//             'amount' => $total,
//             'currency' => 'USD',
//         ]);
//         $session = \Stripe\Checkout\Session::create(
//             [
//                 'line_items' =>
//                 [
//                     [
//                         'price_data' => [
//                             'currency' => 'USD',
//                             'product_data' => [
//                                 "name" => $productname,
//                             ],
//                             'unit_amount' => $total,
//                         ],
//                         'quantity' => 1,

//                     ],
//                 ],
//                 'mode' => 'payment',
//                 'success_url' => route('success', ['matricula_id' => $resultado1->id, 'session_id' => $paymentIntent->id]), 
//                 'cancel_url' => route('cancelamento'),
//            ],
            
//         );
       
//         $session_id = $session->id;

       

//         // Redirecionar para a página de pagamento do Stripe
//         return redirect()->away($session->url);
//     }

//     public function cancelamento()
//     {
//         // Exiba uma mensagem de erro para o usuário
//         return back()->with('error', 'Ocorreu um erro durante o processamento do pagamento. Por favor, tente novamente mais tarde.');
//     }

//     public function success(Request $request, string $matricula_id, string $session_id)
//     {
//         // Obtenha o ID da sessão do parâmetro matricula_id
        
    
//         if(!$resultado1 = Matriculation::find($matricula_id)) // buscando os dados do id na base de dados suportes
//         {
//             return back(); // para voltar na mesma pagina
//         }
//         //dd($session_id);
//         // Verificar se a transação foi concluída com sucesso no Stripe
//         $session = \Stripe\Checkout\Session::retrieve($session_id);
//         if ($session->payment_status === 'paid') {
//             // Atualizar o estado da matrícula para "concluído"
//             $matricula = Matriculation::find($resultado1);
//             if ($matricula) {
//                 $matricula->status = 'Concluído';
//                 $matricula->save();
//             }
//         } else {
//             // Exiba uma mensagem de erro para o usuário
//             return back()->with('error', 'Ocorreu um erro durante o processamento do pagamento. Por favor, tente novamente mais tarde.');
//         }

//         // Redirecionar para a página de matrículas ou para uma página de sucesso
//         return redirect()->route('perfil')->with('success', 'Pagamento realizado com sucesso!');
//     }

   
    

// }

// class StripeController extends Controller
// {
//     public function checkout(string $matricula_id, string $curso_id)
//     {
//         if(!$resultado = Course::find($curso_id)) {
//             return back();
//         }

//         if(!$resultado1 = Matriculation::find($matricula_id)) {
//             return back();
//         }

//         return view('livewire.checkout', compact('resultado', 'resultado1'));
//     }

//     public function session(Request $request, string $id)
//     {
//         if(!$resultado1 = Matriculation::find($id)) {
//             return back();
//         }

//         \Stripe\Stripe::setApiKey(config('Stripe.sk'));

//         $productname = $request->get('productname');
//         $totalprice = $request->get('total');
//         $two0 = "00";
//         $total = "$totalprice$two0";
        
//         $paymentIntent = \Stripe\PaymentIntent::create([
//             'amount' => $total,
//            'currency' => 'USD',
//       ]);

//         $session = \Stripe\Checkout\Session::create([
//             'payment_method_types' => ['card'],
//             'line_items' => [
//                 [
//                     'price_data' => [
//                         'currency' => 'USD',
//                         'product_data' => [
//                             "name" => $productname,
//                         ],
//                         'unit_amount' => $total,
//                     ],
//                     'quantity' => 1,
//                 ],
//             ],
//             'mode' => 'payment',
//             'success_url' => route('success', ['matricula_id' => $resultado1->id, 'session_id' => $paymentIntent->id]),
//             'cancel_url' => route('cancelamento'),
//         ]);

//         // Redirecionar para a página de pagamento do Stripe
//         return redirect()->away($session->url);
//     }

//     public function cancelamento()
//     {
//         // Exiba uma mensagem de erro para o usuário
//         return back()->with('error', 'Ocorreu um erro durante o processamento do pagamento. Por favor, tente novamente mais tarde.');
//     }

//     public function success(Request $request, string $matricula_id, string $session_id)
//     {
//         if(!$resultado1 = Matriculation::find($matricula_id)) {
//             return back();
//         }

//         // Verificar se a transação foi concluída com sucesso no Stripe
//         \Stripe\Stripe::setApiKey(config('Stripe.sk'));
//         $session = \Stripe\Checkout\Session::retrieve($session_id);
//         if ($session->payment_status === 'paid') {
//             // Atualizar o estado da matrícula para "concluído"
//             $matricula = Matriculation::find($resultado1);
//             if ($matricula) {
//                 $matricula->status = 'Concluído';
//                 $matricula->save();
//             }
//         } else {
//             // Exiba uma mensagem de erro para o usuário
//             return back()->with('error', 'Ocorreu um erro durante o processamento do pagamento. Por favor, tente novamente mais tarde.');
//         }

//         // Redirecionar para a página de matrículas ou para uma página de sucesso
//         return redirect()->route('perfil')->with('success', 'Pagamento realizado com sucesso!');
//     }
// }


class StripeController extends Controller
{
    public function checkout(string $matricula_id, string $curso_id)
    {
        if(!$resultado = Course::find($curso_id)) {
            return back();
        }

        if(!$resultado1 = Matriculation::find($matricula_id)) {
            return back();
        }

        return view('livewire.checkout', compact('resultado', 'resultado1'));
    }

    public function session(Request $request, string $id)
    {
        if(!$resultado1 = Matriculation::find($id)) {
            
            return back();
        }

        \Stripe\Stripe::setApiKey(config('Stripe.sk'));

        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";

     
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount' => $total,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success', ['matricula_id' => $resultado1->id]),
            'cancel_url' => route('cancelamento'),
        ]);

        //dd($session_id, $resultado1);
        // Redirecionar para a página de pagamento do Stripe
        return redirect()->away($session->url);
    }

    public function cancelamento()
    {
        // Exiba uma mensagem de erro para o usuário
        return back()->with('error', 'Ocorreu um erro durante o processamento do pagamento. Por favor, tente novamente mais tarde.');
    }

    public function success(Request $request, string $matricula_id)
    {
        if(!$resultado1 = Matriculation::find($matricula_id)) {
            return back();
        }
           
        if ($resultado1) {
            $resultado1->status = 'Concluído';
            $resultado1->save();
        }
        // Redirecionar para a página de matrículas ou para uma página de sucesso
        return redirect()->route('estudante.perfil')->with('success', 'Pagamento realizado com sucesso!');
    }
}


