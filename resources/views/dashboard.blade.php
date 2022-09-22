<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form action="exam" method="post">
                        @csrf
                        <table>


                            <tr>
                                <td>Sample Question type 1 (MCQ)</td>
                            </tr>
                            <tr>
                                 <td>
                                    <input type="radio" value="single-1" name="single1"> Options 1 <br/>
                                    <input type="radio" value="single-2" name="single1"> Options 2 <br/> 
                                    <input type="radio" value="single-3" name="single1"> Options 3 <br/>
                                    <input type="radio" value="single-4" name="single1"> Options 4
                                </td>
                            </tr>

                            <tr>
                                <td>Sample Question type 2 (Multiple selection)</td>

                            </tr>
                            <tr>
                                 <td>
                                    <input type="checkbox" name="multiple[]" value="multiple1"> Options 1 <br/>

                                    <input type="checkbox" name="multiple[]" value="multiple2"> Options 2 <br/> 

                                    <input type="checkbox" name="multiple[]" value="multiple3"> Options 3 <br/>

                                    <input type="checkbox" name="multiple[]" value="multiple4"> Options 4

                                </td>
                            </tr>


                            <tr>
                                <td>Sample Question type 3</td>
                                
                            </tr>
                            <tr>
                                 <td>
                                    <tr>
                                        <td>


                                            Option a <br>
                                            <input type="radio" name="option_a" value="option-a-true"> True <br/>
                                            <input type="radio" name="option_a" value="option-a-false"> False <br/> <br/> 


                                            Option b <br>
                                            <input type="radio" name="option_b" value="option-b-true"> True <br/>
                                            <input type="radio" name="option_b" value="option-b-false"> False <br/><br/> 

                                            Option c <br>
                                            <input type="radio" name="option_c" value="option-c-true"> True <br/>
                                            <input type="radio" name="option_c" value="option-c-false"> False <br/> 
                                        </td>
                                    </tr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" style="background: #ddd;border-radius: 5px;padding: 5px;margin-top: 20px;">Submit</button>
                                </td>
                            </tr>

                        </table>

                    </form>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
