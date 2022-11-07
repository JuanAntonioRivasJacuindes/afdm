<x-jet-action-section>
    <x-slot name="title">
        {{ __('Payment Method') }}
    </x-slot>


    <x-slot name="description">
        {{ __('Agrega y guarda tarjetas de crédito a tu cuenta y úsalas para comprar cursos o domiciliar tus pagos.') }}
    </x-slot>

    <x-slot name="content">
        <x-jet-button
            class="w-full h-12 px-5  transition-colors duration-150 bg-indigo-600 rounded-lg focus:shadow-outline "
            onclick="window.location='{{ route('create_payment_method') }}'">+ Agregar una tarjeta</x-jet-button>
        <div class="text-left w-full flex flex-row  bg-gray-100 my-2 p-2 rounded-md border-2 ">
            <div class="mx-auto"><small>Banco</small></div>
            <div class="mx-auto"><small>Terminación</small></div>
            <div class="mx-auto"><small>Vencimiento</small></div>
            <div class="mx-auto"><small>Eliminar</small></div>
        </div>
        @foreach ($paymentMethods as $card)
            <div
                class="mx-auto w-full flex flex-row text-center bg-gray-100 my-2 p-2 rounded-md border-2 border-black hover:bg-gray-200 ">
                <div class="mx-auto w-10   ">

                    @if ($card->card->brand == 'visa')
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 56.48 56.48" style="enable-background:new 0 0 56.48 56.48;"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M55.026,9.939H1.454C0.65,9.939,0,10.59,0,11.393v33.695c0,0.803,0.65,1.454,1.454,1.454h53.572
                           c0.804,0,1.454-0.651,1.454-1.454V11.393C56.48,10.59,55.83,9.939,55.026,9.939z M4.373,21h6.028
                           c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.305c-1.288-3.298-4.392-6.042-9.083-7.178L4.373,21z M11.667,35.38L8.185,23.484
                           c2.503,1.602,4.635,4.144,5.386,5.913l0.406,1.469l3.808-9.729h4.12l-6.123,14.24L11.667,35.38z M24.933,35.392h-3.888
                           l2.431-14.268h3.89L24.933,35.392z M31.699,35.605c-1.743-0.018-3.422-0.363-4.332-0.762l0.547-3.193l0.501,0.227
                           c1.277,0.533,2.104,0.749,3.661,0.749c1.117,0,2.314-0.437,2.325-1.393c0.007-0.625-0.501-1.071-2.015-1.771
                           c-1.476-0.682-3.43-1.826-3.406-3.875c0.021-2.773,2.729-4.708,6.572-4.708c1.506,0,2.713,0.31,3.483,0.599L38.51,24.57
                           l-0.351-0.165c-0.716-0.288-1.637-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                           c2.243,1.018,3.28,2.253,3.266,3.876C38.441,33.692,35.788,35.605,31.699,35.605z M48.549,35.397c0,0-0.355-1.64-0.473-2.138
                           c-0.566,0-4.534-0.006-4.98-0.006c-0.151,0.385-0.817,2.144-0.817,2.144h-4.083l5.773-13.075c0.41-0.929,1.105-1.184,2.037-1.184
                           h3.004l3.147,14.258L48.549,35.397L48.549,35.397z" />
                                    <path
                                        d="M46.28,24.985c-0.198,0.537-0.539,1.4-0.517,1.362c0,0-1.229,3.167-1.549,3.988h3.229c-0.156-0.714-0.901-4.12-0.901-4.12
                           L46.28,24.985z" />
                                </g>
                            </g>

                        </svg>
                    @elseif ($card->card->brand == 'mastercard')
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 56.48 56.48" style="enable-background:new 0 0 56.48 56.48;"
                            xml:space="preserve">
                            <g>
                                <path
                                    d="M15.051,25.813c-1.058,0-1.869,0.34-1.869,0.34l-0.224,1.33c0,0,0.669-0.272,1.682-0.272c0.575,0,0.995,0.064,0.995,0.531
                       c0,0.284-0.051,0.389-0.051,0.389s-0.453-0.037-0.663-0.037c-1.335,0-2.737,0.568-2.737,2.287c0,1.354,0.919,1.663,1.49,1.663
                       c1.089,0,1.559-0.706,1.583-0.708l-0.051,0.59h1.359l0.606-4.25C17.17,25.871,15.597,25.813,15.051,25.813z M14.289,30.75
                       c-0.479,0-0.604-0.365-0.604-0.583c0-0.422,0.229-0.93,1.36-0.93c0.264,0.001,0.292,0.028,0.336,0.036
                       C15.411,29.533,15.219,30.75,14.289,30.75z M19.11,27.741c0,0.771,1.839,0.392,1.839,2.31c0,2.051-1.987,1.961-2.334,1.961
                       c-1.295,0-1.695-0.178-1.732-0.188l0.206-1.351c0.002-0.01,0.65,0.236,1.371,0.236c0.416,0,0.956-0.041,0.956-0.537
                       c0-0.746-1.932-0.566-1.932-2.334c0-1.559,1.158-2.015,2.3-2.015c0.882,0,1.424,0.121,1.424,0.121l-0.195,1.362
                       c0,0-0.837-0.069-1.054-0.069C19.409,27.238,19.11,27.358,19.11,27.741z M22.773,30.089c-0.034,0.211,0.025,0.498,0.562,0.498
                       c0.137,0,0.292-0.046,0.398-0.046l-0.193,1.312c-0.155,0.043-0.594,0.199-1.157,0.203c-0.719,0.007-1.23-0.397-1.23-1.308
                       c0-0.612,0.877-5.655,0.911-5.688h1.543l-0.157,0.9h0.77l-0.197,1.452h-0.817L22.773,30.089z M28.727,29.452
                       c0,0,0.203-1,0.203-1.407c0-1.017-0.506-2.257-2.2-2.257c-1.552,0.001-2.701,1.673-2.701,3.563c0,2.181,1.439,2.699,2.666,2.699
                       c1.132,0,1.63-0.254,1.63-0.254l0.272-1.488c0,0-0.861,0.38-1.639,0.38c-1.657,0-1.367-1.236-1.367-1.236H28.727z M26.735,27.171
                       c0.871,0,0.71,0.979,0.71,1.057h-1.713C25.732,28.128,25.894,27.171,26.735,27.171z M12.737,24.583l-1.217,7.35H9.94l0.879-5.541
                       l-1.983,5.541H7.773l-0.138-5.541l-0.939,5.541H5.207l1.234-7.35h2.252l0.079,4.51l1.521-4.51H12.737z M32.26,23.615h-8.014
                       c0.079-0.15,0.359-0.754,0.781-1.553h6.607C31.871,22.564,32.079,23.082,32.26,23.615z M30.799,20.539h-4.913
                       c0.315-0.52,0.663-1.052,1.033-1.552h2.754C30.081,19.479,30.458,19.997,30.799,20.539z M28.235,38.991
                       c-0.537-0.485-1.023-1.022-1.482-1.584h2.993c-0.451,0.553-0.944,1.071-1.472,1.552h-0.003c0,0.001,0.001,0.001,0.001,0.001
                       C28.26,38.97,28.247,38.98,28.235,38.991z M30.817,35.913h-5.143c-0.313-0.5-0.605-1.013-0.856-1.552h6.843
                       C31.41,34.897,31.129,35.415,30.817,35.913z M32.651,25.905c-0.205,0.418-0.386,0.801-0.574,1.79
                       c-1.071-0.379-1.155,1.695-1.604,4.25h-1.584l0.963-5.982h1.437L31.15,26.83c0,0,0.512-0.943,1.203-0.943
                       C32.555,25.885,32.651,25.905,32.651,25.905z M35.508,30.548c0.52,0,1.276-0.379,1.276-0.379l-0.276,1.684
                       c0,0-0.83,0.211-1.35,0.211c-1.842,0-2.777-1.271-2.777-3.196c0-2.903,1.733-4.449,3.514-4.449c0.804,0,1.738,0.378,1.738,0.378
                       l-0.252,1.635c0,0-0.631-0.441-1.416-0.441c-1.05,0-1.992,1.002-1.992,2.824C33.973,29.712,34.412,30.548,35.508,30.548z
                        M50.574,31.082c-0.075,0.04-0.133,0.098-0.175,0.174c-0.042,0.075-0.063,0.153-0.063,0.234s0.021,0.158,0.063,0.232
                       c0.041,0.074,0.099,0.133,0.173,0.175c0.075,0.041,0.152,0.062,0.232,0.062c0.082,0,0.16-0.021,0.233-0.062
                       c0.074-0.042,0.132-0.101,0.173-0.175c0.043-0.074,0.062-0.151,0.062-0.232c0-0.082-0.02-0.16-0.062-0.234
                       c-0.041-0.076-0.101-0.134-0.176-0.174c-0.074-0.041-0.15-0.061-0.23-0.061C50.727,31.021,50.65,31.041,50.574,31.082z
                        M51.143,31.293c0.035,0.063,0.054,0.128,0.054,0.195s-0.017,0.133-0.052,0.194c-0.034,0.062-0.082,0.109-0.145,0.146
                       c-0.062,0.034-0.126,0.052-0.193,0.052c-0.068,0-0.133-0.018-0.194-0.052c-0.063-0.035-0.11-0.083-0.146-0.146
                       s-0.052-0.127-0.052-0.194s0.017-0.132,0.054-0.195c0.035-0.062,0.082-0.11,0.146-0.145s0.127-0.05,0.192-0.05
                       s0.129,0.017,0.19,0.05C51.061,31.183,51.108,31.23,51.143,31.293z M44.877,29.517c0,1.265,0.629,2.504,1.913,2.504
                       c0.925,0,1.437-0.645,1.437-0.645l-0.067,0.551h1.501l1.18-7.339l-1.548,0.003l-0.333,2.065c0,0-0.58-0.803-1.49-0.803
                       C46.055,25.854,44.877,27.559,44.877,29.517z M48.575,28.618c0,0.815-0.403,1.904-1.239,1.904c-0.556,0-0.816-0.466-0.816-1.198
                       c0-1.197,0.537-1.986,1.216-1.986C48.29,27.339,48.575,27.72,48.575,28.618z M51.086,36.347c-0.011-0.01-0.025-0.021-0.043-0.026
                       c0.043-0.003,0.079-0.019,0.105-0.046c0.025-0.027,0.039-0.059,0.039-0.096c0-0.026-0.008-0.051-0.023-0.074
                       s-0.037-0.04-0.064-0.049c-0.025-0.01-0.068-0.015-0.127-0.015h-0.174v0.505l0,0h0.082v-0.215h0.047
                       c0.028,0,0.051,0.006,0.064,0.018c0.021,0.017,0.051,0.056,0.086,0.117l0.044,0.08h0.101l-0.062-0.099
                       C51.131,36.401,51.106,36.368,51.086,36.347z M50.979,36.263h-0.1v-0.152h0.094c0.039,0,0.065,0.003,0.08,0.009
                       c0.016,0.006,0.026,0.015,0.035,0.026c0.008,0.012,0.012,0.025,0.012,0.039c0,0.023-0.008,0.043-0.025,0.057
                       S51.025,36.263,50.979,36.263z M55.026,9.939H1.454C0.65,9.939,0,10.59,0,11.393v33.695c0,0.803,0.65,1.454,1.454,1.454h53.572
                       c0.804,0,1.454-0.651,1.454-1.454V11.393C56.48,10.59,55.83,9.939,55.026,9.939z M51.409,36.519
                       c-0.042,0.076-0.099,0.134-0.173,0.175s-0.152,0.062-0.232,0.062c-0.082,0-0.16-0.021-0.234-0.062
                       c-0.073-0.041-0.131-0.099-0.174-0.175c-0.041-0.073-0.062-0.151-0.062-0.232s0.021-0.158,0.063-0.234
                       c0.041-0.076,0.101-0.133,0.175-0.174c0.075-0.039,0.151-0.06,0.231-0.06c0.079,0,0.155,0.021,0.229,0.06
                       c0.075,0.041,0.134,0.098,0.175,0.174c0.042,0.076,0.062,0.154,0.062,0.234S51.451,36.447,51.409,36.519z M52.457,28.241
                       c0.002,8.005-6.484,14.497-14.49,14.499c-3.744,0.001-7.158-1.418-9.73-3.749c-2.572,2.327-5.979,3.745-9.717,3.745
                       c-8.001,0-14.495-6.493-14.495-14.495c0-7.97,6.443-14.444,14.402-14.496c0.031,0,0.062,0,0.093,0c3.738,0,7.146,1.418,9.718,3.745
                       c2.571-2.328,5.981-3.747,9.722-3.748c8.006-0.003,14.497,6.486,14.499,14.492C52.457,28.236,52.457,28.238,52.457,28.241z
                        M50.6,31.244v0.504h0.082v-0.214h0.047c0.029,0,0.052,0.006,0.066,0.017c0.021,0.018,0.049,0.056,0.086,0.119l0.043,0.079h0.101
                       l-0.062-0.099c-0.029-0.047-0.055-0.08-0.074-0.1c-0.012-0.011-0.025-0.02-0.043-0.026c0.043-0.003,0.078-0.019,0.104-0.046
                       c0.025-0.026,0.04-0.06,0.04-0.096c0-0.025-0.008-0.051-0.024-0.074c-0.016-0.022-0.037-0.039-0.062-0.049
                       s-0.069-0.015-0.128-0.015L50.6,31.244L50.6,31.244z M50.891,31.347c0.009,0.013,0.013,0.024,0.013,0.041
                       c0,0.022-0.009,0.041-0.024,0.055c-0.019,0.015-0.05,0.021-0.097,0.021h-0.099v-0.152h0.092c0.04,0,0.066,0.003,0.082,0.008
                       C50.871,31.327,50.883,31.334,50.891,31.347z M40.069,25.813c-1.06,0-1.87,0.34-1.87,0.34l-0.225,1.33c0,0,0.67-0.272,1.682-0.272
                       c0.575,0,0.996,0.064,0.996,0.531c0,0.284-0.053,0.389-0.053,0.389s-0.452-0.037-0.664-0.037c-1.334,0-2.735,0.568-2.735,2.287
                       c0,1.354,0.92,1.663,1.49,1.663c1.088,0,1.558-0.706,1.583-0.708l-0.051,0.59h1.358l0.606-4.25
                       C42.189,25.871,40.615,25.813,40.069,25.813z M39.309,30.75c-0.48,0-0.604-0.365-0.604-0.583c0-0.422,0.229-0.93,1.36-0.93
                       c0.263,0.001,0.291,0.028,0.336,0.036C40.43,29.533,40.237,30.75,39.309,30.75z M45.034,27.694
                       c-1.071-0.379-1.153,1.694-1.604,4.25h-1.584l0.963-5.982h1.438l-0.138,0.867c0,0,0.513-0.943,1.204-0.943
                       c0.201,0,0.297,0.02,0.297,0.02C45.405,26.323,45.223,26.706,45.034,27.694z" />
                            </g>

                        </svg>
                    @elseif ($card->card->brand == 'amex')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.731 365.071">
                            <path
                                d="M68.896 330.169V166.473h16.443v-2.778h1.518v-3.794h1.266v-1.271h8.854v1.271h1.263v2.529h1.266v4.043h30.865v-4.043h2.531v2.529h1.264v1.514h15.183v-1.514h1.514v-2.529h2.531v4.043h75.393v-14.167h3.795v14.167h39.725v-2.778h2.531v1.264h4.043v1.514h25.557v-2.778h1.266v-2.531h1.266v-2.535h8.852v1.271h1.266v2.529h1.266v2.529h1.264v1.514h32.13v-5.309h2.531v2.531h1.263v2.778h26.818V113.85h-25.553v3.795h-2.528v-2.529h-1.266v-1.266h-25.55v3.795h-2.531v-2.529h-1.264v-1.266h-44.785v1.266h-4.043v1.266h-2.531v-2.531h-24.291v1.266h-3.794v-1.266h-96.136v1.266h-1.266v2.529h-1.266v3.794h-1.263v2.786h-1.271v2.529h-2.529v-2.529h-1.266v-4.049h-1.266v-2.531h-1.264v-2.529h-1.265v-1.266h-26.816v5.06h-2.786v-2.529h-1.263v-2.531H80.28v1.266h-1.266v3.794h-1.266v2.529h-1.263v2.786H75.22v3.794h-1.266v2.529H72.69v2.531h-1.265v3.794h-2.529V0h328.893v180.394h-24.286v1.264h-5.06v-1.264h-32.131v1.264h-3.794v-1.264h-44.777v1.264h-5.065v-1.264h-37.19v1.264h-3.794v-1.264h-43.514v1.264h-1.263v1.266h-1.266v1.265h-1.266v1.264h-1.263v1.266h-4.051v-1.266h-1.264v-1.264h-1.265v-2.53h-1.266v-1.264h-49.843v52.621h48.579v-1.264h1.264v-1.266h1.266v-1.52h1.265v-1.264h1.264v-2.531h4.051v1.266h1.263v2.529h1.266v1.52h1.266v1.266h1.263v1.264h30.61v-12.901h12.904v-1.266h2.53v14.167h24.284v-14.167h3.801v14.167h81.97v-1.264h3.794v-1.266h2.529v2.529h32.13v-1.264h5.06v98.418H68.896zm150.709-123.896h18.62v-1.266h1.266v-9.512h-1.266v-1.265h-18.62v12.043zm1.264-67.807h19.886v-2.529h1.266v-5.719h-1.266v-2.529h-19.886v10.777zm-76.254 86.376V188.31h35.272v2.786h1.263v1.266h1.266v1.264h1.266v1.266h1.263v1.265h1.266v1.264h1.266v1.266h1.263v1.266h5.974v-1.266h1.265v-1.266h1.263v-1.264h1.266v-2.53h1.266v-1.264h1.264v-1.266h1.265v-1.271h1.266v-1.515h34v1.515h3.795v1.271h1.266v1.266h1.266v1.264h1.264v2.53h1.266v8.196h-1.266v2.528h-1.264v1.521h-1.266v1.263h-2.529v1.267h-6.58v1.265h-13.912v12.647H203.57v-1.264h-1.266v-1.266h-1.265v-1.266h-1.264v-2.529h-1.266v-1.265h-1.266v-1.264h-1.263v-1.266h-1.265v-1.266h-7.237v1.266h-1.266v1.266h-1.266v1.264h-1.263v2.53h-1.266v1.264h-1.266v1.266h-1.263v1.266h-1.266v1.264h-34.007v-.002zm108.788 0V188.31h26.413v1.515h3.795v1.271h1.264v1.266h1.271v1.264h1.266v2.53h1.263v3.136h-1.263v2.529h-1.266v2.531h-1.271v7.236h1.271v1.264h1.266v11.99h-5.673v-8.853h-1.266v-3.795h-1.512v-1.265H260.59v13.912h-7.187v.001zm42.255 0V188.31H324.6v5.922h-21.756v9.513h20.492v4.656h-20.492v10.776H324.6v5.665h-28.942zm37.19 0v-5.665h19.227v-1.266h2.531v-6.981h-1.266v-1.267h-11.638V208.4h-5.06v-1.521h-1.266v-1.266h-1.264v-1.263h-1.266v-1.266h-1.266v-8.195h1.266v-1.266h1.266v-2.529h2.529v-1.271h2.528v-1.515h21.099v5.922h-20.492v1.265h-1.264v6.983h2.784v1.265h13.914v1.264h2.529v1.266h1.265v1.266h1.264v1.264h1.521v9.715h-1.521v1.266h-1.264v1.264h-1.265v1.266h-1.266v1.266h-5.058v1.264h-18.567v-.002zm35.924 0v-5.665h20.492v-1.266h1.266v-8.248h-12.903V208.4h-3.795v-1.521h-2.53v-1.266h-1.264v-1.263h-1.266v-2.531h-1.266v-5.665h1.266v-2.53h1.266v-1.264h1.264v-1.266h1.265v-1.271h2.529v-1.515h21.099v5.922h-20.492v1.265h-1.264v6.983h2.529v1.265h14.169v1.264h3.794v1.266h1.264v2.529h1.266v4.049h1.271v1.872h-1.271v3.794h-1.266v2.529h-2.528v1.266H392.4v1.266h-5.059v1.264h-18.569zm-162.07-4.402h5.717v-27.473h-5.717v1.264h-1.266v1.265h-1.264v1.266h-1.265v1.264h-1.266v1.266h-1.264v1.266h-1.266v2.529h-1.266v6.982h1.266v1.52h1.266v2.529h1.264v1.266h1.266v1.264h1.265v1.265h1.264v1.266h1.266v1.261zm-56.168-1.263h26.217v-1.266h1.264v-1.265h1.266v-1.264h1.266v-1.266h1.263v-1.266h1.265v-2.783h1.266v-1.266h1.264v-5.717h-1.264v-1.266h-1.266v-1.264h-1.265v-1.266h-1.263v-1.266h-1.266v-1.264h-1.266v-1.266h-1.264v-1.265h-26.217v9.513h20.493v4.656h-20.493v10.781zm110.056-14.169h18.372v-1.264h1.512v-8.248h-1.512v-1.265H260.59v10.777zM71.755 158.306v-1.876h1.266v-2.531h1.263v-2.529h1.266v-3.795h1.265v-2.785h1.264v-3.795h1.266v-2.529h1.265v-2.529h1.264v-3.794h1.266v-2.531h1.265v-2.529h1.264v-4.049h1.266v-1.266h10.979v1.266h1.266v2.783h1.266v2.531h1.264v3.794h1.265v2.529h1.266v2.529h1.264v3.794h1.52v2.531h1.266v2.529h1.265v4.049h1.263v2.531h5.719v-30.868h12.245v1.266h1.263v2.783h1.266v2.531h1.266v2.529h1.263v2.529h1.266v2.531h1.266v3.794h1.263v2.529h1.266v2.529h6.988v-3.795h1.266v-2.529h1.266v-2.529h1.263v-3.794h1.266v-2.531h1.514v-3.794h1.263v-2.783h1.266v-1.266h11.996v36.538h-5.667V132.75H155.6v2.529h-1.266v2.529h-1.263v2.531h-1.266v4.049h-1.266v2.529h-1.263v2.529h-1.514v2.531h-1.266v3.794h-1.267v2.535h-5.669v-1.27h-1.265v-2.53h-1.263v-2.529h-1.266v-2.531H134.5v-3.794h-1.264v-2.784h-1.266v-2.529h-1.52v-2.531h-1.266v-3.794h-5.717v24.293h-17.304v-3.8h-1.264v-2.529h-1.265v-2.531H81.216v2.531H79.95v2.529h-1.266v3.8h-6.929v-.001zm104.996 0v-36.538h28.686v5.921h-21.755v9.512h20.492v5.666h-20.492v9.769h21.755v5.67h-28.686zm36.934 0v-36.538h26.413v1.266h3.795v1.265h1.264v1.518h1.266v1.266h1.265v2.529h1.264v3.138h-1.264v3.794h-1.265v1.263h-1.266v6.983h1.266v1.265h1.265v12.25h-5.666v-10.124h-1.266v-2.531h-1.264v-1.263H220.87v13.918h-7.185v.001zm43.513 0v-36.538h5.921v36.538h-5.921zm27.071 0v-1.27h-5.307v-1.265h-2.531v-1.265h-1.263v-1.266h-1.266v-2.529h-1.271v-2.529h-1.264v-6.581h-1.266v-3.135h1.266v-6.323h1.264v-2.531h1.271v-1.263h1.266v-2.531h2.528V124.3h2.777v-1.265h3.795v-1.266h11.995v5.921h-12.652v1.266h-2.531v1.263h-1.264v1.266h-1.265v3.794h-1.266v10.777h1.266v2.786h1.265v2.529h2.529v1.266h10.783v-1.266h1.266v-3.795h1.264v-2.785h1.265v-2.529h1.266v-3.794h1.264v-2.529h1.514v-2.531h1.266v-3.794h1.271v-2.529h1.264v-2.784h1.266v-2.531h11.989v4.049h1.521v2.531h1.264v2.529h1.266v3.794h1.265v2.529h1.264v2.531h1.266v3.794h1.266v2.529h1.264v2.786h1.266v3.795h5.717v-30.868h12.246v2.531h1.264v1.518h1.266v2.531h1.266v2.529h1.263v1.266h1.266v2.529h1.266v2.529h1.264v1.265h1.266v2.529h1.265v2.531h1.264v1.264h5.974v-23.022h6.931v36.538h-10.979v-1.27h-1.266v-2.53h-1.266v-1.266h-1.264v-2.529h-1.265v-2.529h-1.266v-1.266h-1.264v-2.529h-1.266v-2.786h-1.266v-1.263h-1.263v-2.531h-1.267v-1.263h-1.265v-2.531h-5.717v24.293H326.53v-1.27h-1.266v-2.53h-1.266v-2.529h-1.263v-2.531h-22.417v2.531h-1.27v3.794h-1.266v2.535h-13.513v-.001zm17.655-13.854h19.925l-9.812-18.505-10.113 18.505zm-219.477-.622h19.918l-9.809-18.505-10.109 18.505z"
                                fill-rule="evenodd" clip-rule="evenodd" />
                            <path
                                d="M4.059 318.76c0-7.19 2.551-13.33 7.654-18.42s11.249-7.635 18.439-7.635c7.19 0 13.33 2.545 18.42 7.635 5.089 5.09 7.635 11.229 7.635 18.42s-2.545 13.337-7.635 18.439c-5.09 5.104-11.229 7.654-18.42 7.654-7.19 0-13.336-2.551-18.439-7.654-5.103-5.102-7.654-11.249-7.654-18.439zm47.895 0c0-6.03-2.126-11.172-6.378-15.424-4.252-4.253-9.393-6.379-15.424-6.379-6.03 0-11.178 2.126-15.443 6.379-4.266 4.252-6.398 9.394-6.398 15.424s2.132 11.179 6.398 15.443c4.265 4.266 9.413 6.398 15.443 6.398 6.031 0 11.172-2.133 15.424-6.398 4.252-4.265 6.378-9.413 6.378-15.443zM38.27 334.493l-8.157-13.801h-4.639v13.801h-4.6v-32.124h8.234c7.731 0 11.597 2.964 11.597 8.892 0 4.123-2.075 7.035-6.224 8.736l8.775 14.496H38.27zm-12.795-28.181v10.669c.387.052 1.392.077 3.015.077 2.989 0 5-.38 6.03-1.14s1.546-2.21 1.546-4.35c0-3.53-2.319-5.296-6.958-5.296h-1.817l-1.816.04z" />
                        </svg>
                    @endif


                </div>

                <div class="m-auto w-1/4 flex flex-col">

                    {{ $card->card->last4 }}
                </div>
                <div class="m-auto w-1/4">
                    {{-- <small class="text-gray-600">
                        Vencimiento
                    </small> --}}
                    {{ $card->card->exp_month }}/{{ $card->card->exp_year - 2000 }}
                </div>
                <button wire:click="deleteCard('{{ $card->id }}')">
                <div class="m-auto w-auto rounded-xl p-2 hover:text-white hover:bg-red-800 bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </div>
                    </button>
            </div>
        @endforeach


    </x-slot>

</x-jet-action-section>
