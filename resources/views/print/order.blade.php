@extends('layouts.print')
@section('content')
    <div class="page" size="A4">
        <div class="pages">


            <p class="text-right">Date: {{ $order->created_at }}
                <br>To : PT. ANGKASA AKBAR TARUNA (AAT)
                <br>From : JAPAN TUNA FISHERIES CORPORATION (JTFC)

            </p>
            <h4 class="text-center mt-6 mb-6">CREW ARRANGEMENT REQUEST</h4>
            <div class="row">
                <p class="mb-0">Request No : {{ $order->inv }}
                    <br>Ship Owner : {{ $order->shipowner }}
                    <br>Ship Name : {{ $order->shipname }}
                </p>

                <div class="col mt-0">

                    <p>
                        Fishing Area : {{ $order->fishingarea }}
                        <br>Nationaly : {{ $order->nationaly }}
                    </p>


                </div>
                <div class="col">
                    <p>Number of Crew Member : {{ $order->member }}
                        <br>Periode of Employment : {{ $order->periode }} Months
                    </p>
                </div>
            </div>
            <div class="row">
                <p style="margin-left: 25px;" class="mb-3">Estimated Date of Embarkation : {{ $order->start }} port :
                    {{ $order->portstart }}</p>
                <p style="margin-left: 25px;" class="mb-3">Estimate Date of Disembarkation : {{ $order->end }} port :
                    {{ $order->portend }}</p>

                <div class="form-group mt-3">
                    <table class="table table-bordered mb-0 no-wrap">
                        <thead>
                            <tr>
                                <th class="text-uppercase fs-6">No.</th>
                                <th class="text-uppercase word-wrap fs-6">Class of Crew</th>
                                <th class="text-uppercase fs-6">Age</th>
                                <th class="text-uppercase fs-6">Experience</th>
                                <th class="text-uppercase fs-6">Number</th>
                                <th class="text-uppercase fs-6">Remark</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderjob as $index => $job)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $job->job->name }}</td>
                                    <td>{{ $job->age }}</td>
                                    <td>{{ $job->exp }}</td>
                                    <td>{{ $job->number }}</td>
                                    <td>{{ $job->remark }}</td>

                                </tr>
                            @endforeach



                        </tbody>
                        <tfoot class="font-weight-bold small">


                        </tfoot>
                    </table>

                    <label for="">Remark Notes</label>
                    <textarea class="form-control" rows="5" disabled></textarea>


                    <p><strong>Notes:</strong></p>
                    <p class="mb-0">Thank you for choosing our service.We look forward to meet you again</p>
                    <p class="mb-0">Money once paid will not we refunded. However, it can be abjected towards any services
                    </p>
                    <p class="font-weight-bold small mt-0">Other T &C Apply</p>
                </div>
            </div>

        </div>
    </div>
    <div class="page" size="A4">
        <div class="content">
            <p>
                What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? It is a long established
                fact that a reader will be distracted by the readable content of a page when looking at its layout. The
                point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
                sometimes on purpose (injected humour and the like). Where does it come from? Contrary to popular belief,
                Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from
                sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The
                first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The
                standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
                1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
                original form, accompanied by English versions from the 1914 translation by H. Rackham.

                What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? It is a long established
                fact that a reader will be distracted by the readable content of a page when looking at its layout. The
                point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
                sometimes on purpose (injected humour and the like). Where does it come from? Contrary to popular belief,
                Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from
                sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The
                first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The
                standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
                1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
                original form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
        </div>
    </div>
@endsection
