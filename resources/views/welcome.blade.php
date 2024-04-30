<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('my-assets/img/akenten.jpg')}}" />
        <link rel="icon" type="image/png" href="{{asset('my-assets/img/akenten.jpg')}}" />
        <title>AAMUSTED-STF</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <!-- Scripts -->
        
        
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            [x-cloak] { display: none !important; }
        </style>
        
        
         {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
         @wireUiScripts
         
         @livewireStyles 
         
         
         @vite(['resources/css/app.css', 'resources/js/app.js'])
         <script src="https://unpkg.com/rough-notation/lib/rough-notation.iife.js"></script>
         <script src="//unpkg.com/alpinejs" defer></script>
         @laravelPWA
    </head>
    <body class="antialiased overflow-x-hidden">
      <x-dialog z-index="z-50" blur="md" align="center" />
            <x-main-nav />
          
            <!-- Hero section -->
            <section class="mx-auto max-w-7xl">
              <div class="flex w-full flex-col p-4 md:flex-row md:space-x-5 my-4 md:my-12">
                <div class="w-full items-center md:w-1/2">
                  <div class="flex flex-col py-11">
                    <h1 class="text-2xl md:text-4xl text-red-800">Are you looking for a teacher or are you interested in teaching for xtra cash join us.</h1>
                    <h2 id="selector" class="text-3xl text-yellow-500">Lets's Learn together. Let's grow together.</h2>
                    <div class="mt-12 w-full text-center">
                      <a href='{{route('register')}}' class="rounded-lg bg-red-800 px-10 py-3 text-xl text-yellow-400">Create Your Account</a>
                    </div>
                  </div>
                </div>
          
                <div class="w-full md:w-1/2">
                  <img
                    class="h-96 w-screen rounded-lg"
                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAD6AXUDASIAAhEBAxEB/8QAGwAAAQUBAQAAAAAAAAAAAAAAAwECBAUGAAf/xABBEAACAQMDAgQEBAMFBwMFAAABAgMABBESITEFQRMiUWEGcYGRFDJCoSNSsWJywdHhFSQzU4KS8EOisgcWRHPx/8QAGgEAAgMBAQAAAAAAAAAAAAAAAgMAAQQFBv/EACoRAAICAQQCAgICAQUAAAAAAAABAhEDBBIhMRNBIlEUYTIzIwVxgZHR/9oADAMBAAIRAxEAPwDy46u9MGc5qfcwtGxONqhHANZjY1Q8Lnc0uMU5cYpDQlo4Uhrq6qLGmmkZ2p1PjXUaOIDAYaM55FTLWVw6unYinGNNwcUWKwvYETqCQNJaRyKXA/UAcnFG6fYK+PR6hal2htmY+ZokJ+ZAqXviqvpXUrPqUMUsDDIUBk7qQOCKtcVzpLk1qQNs4oJJzUhgcVHI3rDqV8TZgfJODCOOM4OTj9xSfij2U/U1zj+BF/0/0oFaMaSijPOVydhjdS9sU03M5/UPsKHiuKkcgjPqKOhdimWU8sf2ppLHuadppMVKLsQE0oJpcUoFTaSzstThq2o9vAJ30ZqcOmxjlj96ZHE5AOaRWZNOBPrVstjbjtT2tIBGxCjIGaZ4WB5UVAzTt964Dn2JoFxcw2yF5HC+nGo59M0ug7sfLPFCAZGxkgD3J4GeKpb7ryRyKlq+pFGuQqoPiEjIUE7YHf3qjv8Aq1xM0ih/IGLrGQCqk/MH+tU3js2okHJCoBwcE71ohhvsBzS6Li565LMLpIsAXGRMrqCRIx3ZSPbaqhpS51u+rcKAw4GMZyKjyPypYkbZ0nfBPJ96YTpCgE8Bcc+++K0xio9GeUmwmuUswGMAFWIPJ4IB4ocrsMrglSufqeTvXMZNQZnUAgAjbOfpSFdRGCMqGYlt8L3x2+dEDY1HyURRwDt9N6VnzsdicNn1zsKYSykbkANkFcd+9M1szkgE+ZvQA79varKF1xacoTqyF8x5A32FHiuZEfILA5wQRztjG/aoXmDLvvgsPc7mnxylnJOnHdifrzULs1HRfiK46dKjIilGGlkOVRhjGOC2c8b9q9H6X1WPqcAl0GN9TqyagwBQlThh+1eJFwrDc7HOcY3zuRWm+Geu/wCzpLsSOFVotUWU1q7qSQjKSNvcUmUa5GJ3wz1fJ9TSZPqar+l35vonLoiSxafEWMkqCw4OrfI781YYoKKsQk00k08ikxUoqwLA70BwalkUJ1q6JZC0neuqRp5rqlEs8emeNgQRztVTNENRIqU770FjmiY+wABFIxp5oZoCCZrs0lLUoE6jxUCjw+nrRIo4FvxKBjhHIXJ4Ge9en2Y6Tb2MFs1zalBEA2qRMHI3zk1hOn9Duurz7kw2kGPElxuzH9Kj1rXW3w10S2QKLZZX2BeYliT8uKDK0XBMz/UY4+h3q9Q6RdwyRO+ZbeKQMPf8tbDo3WbLq8AeJsTKP4sR/MrfKqjr0HSbDps+m3hSaUCC2SNF1vI2wxii/Cfw8/TYje3J/wB6uEXEe+ETnB96U6nG2H/F8GlYbVGYeapbKcGorfmrDqY/A2YH8iaVJt4gBk+WnRWU0mMjSD680SA6YoSeMgVbDGkY71s0+NSgmzJmm4yaRDisYYyMgE+9M6hAng6lXcb7e1WAFMlQPHIp9DWrxqqM293yZ9FZyAOTxUoWE/fAz7GmW6lZ0U/pYirtioxlsUiGJPsbPI0+CsXpzH8zfanv05URm1EkDI3qx8vrTZN43Hsad4oi97Kzp+030/xq3LIDvjNVNjtNv7/1q0MSMck/vVY1xwXN8jvlXPnw3+VLmNRjV+9NeSPSw1dqbxQC7KmJVaQhiMajzxWI+IeoiW58GPSI4jImxDAsTg7jvtWtv7g2sNy4OMKxVhu2rOcDG+3Jrza8ncz6nOSWb0yTnPA+dJxxV8j5OkB1NJnuw2BfgjOAKiyOwJCnIDHX9OwNPkZwMAHBONOTqJxzn2oWcqwK59ADuFXkmtCVCWwZdycJk7HOrbf0GaVfETUSMg75/VgDvmmKhILFiV1AthsE+pyaazNpAU45yeMknIogQgOWDbnGD2GkfWmlgrMADuBx6E7b/wBaapfBUqQpAzxlj6ik1s2RjAA3OeRwM1RQrtyRsVAB3Odz7U/P6c7AZOntqG4wd6CUK4zsTjONyvbauUFchWbONgMkn5mrIOxuSFLEDJySMnf0pBgYGSBnXvjn0+VNLMCRjGWOOTv796cCWVlYcccE+uNqsh0mSdRJPIAY77H3p6SCMqSTz2PFAz33JU7HHHalJGTwBpODv/jVNER6J8IdZhDJaSM/iM5WNFVSJNWBgd87ZO9b9WR1DKcqR32P1FeE9OvJLO7tpkHmhbUoOcNlSCCR617F0TqVvf2dvKHxJKWypIJBUY2Gc4xjFJa5DfVltgUmBTqSpQI2mEUSmmrKA6efnXUXFdV0Q8AZiDvQy1S7mDkgVAbI2PaqZpacXyKTTaTNLQoo4ZrqXFIaIgoqRFjUvzoSiiJnUMDODmoUem9FRIumWgwNTJrPG5O+dqLe9Qs+m273V06gcRID5nbsBWWtPiTw7SC0tbae4u1Hh6EQ6RvtkirPp/Rb2+ljv+t4LghobUflj/ve9Z5Q5thJjemWV11i8j611JCsSH/cLZs4Vc7OQe5rYjgfKo4wAoAAA2AHYCpA7fKqf0QRuD8qhN+aprcGojDzVk1K+Bp07+RPQZtV9Rj+tWlu2uFD3AqtiH+6/T/GuSaVFKKdq2aZ1BGXPzNlq8kUYyzDI53qFLfrk6ASeNqiNqcksS3z4pukfSnSnfQtR+x0ZLTq5GNTZNXJjD6SeQKpRkEEcij/AIm4OFB9BQwdEkr6LTSo70jlPDfccVDkSVFVnkO/0oBkXJBdvfc052ldCt0bqwIyhJB3DHFE8Wc8uaRngXG3NOV4yAdOxpO1rk0LlWIWkPLH71wz3JNTjDEbcuBvioIFU4tA2VHXkRrInUFdH1DDYJwDgaf9K89nJzlgM5LajjAbmvRusWk9xCfDIKjcg/mDdsGsBe281s5RkOxIye5PfB7UcAm7RWMXLDB7gjPqdtsb0xw6gKSuMZ3PBJ343oj+YjTtpBDH1Oc7ChOhZjpO6qfvscDNOFA8bsTjbBAPfHGB701A7yu7Z0LyB79/pRGyGAcc845UHamGU+UIPRR6ADfBqwRACAx1N+XIB2xnfNOYYVWGdS4U8YAPqPWucsdyFOSMauwpjNrbC4GcEd8HiqIM8hYgltJBwR3on8IA4yNs7HGSDtv/AFpAsZbSc7EDPfPORS5QeIFTPA5zsO1Qg0htywGTgA8Bc8Ek0gGEYnvvpBwSR3pcyqWyDuoBz6E+nFI+oDfHBOM5O5xVlDeW05AJ33GTiubDE86edj/nTSwAOwznO/GabnGAdzv86sg8EnvsOMHGa23wR1AW960RI0TooCDJcEclc/XNYcH7Ec+9aH4aab/aNpHGT/EnjRiAcDUcg5G/pSpIJHtXOCO4BrjmlA4+Q4riKIEbvSHNOpMVKINArqeBXVCHiTKHG9V11bckDfmrAHG1c4DigZ1HHcjOkYODtThUm6gKtqA7nNRhV0ZWqdD6UCkFEUVQLOUYo8Rjiw7kbnAHua6KMuwHbIFb1Pg3oMot5ZPxJIRGKeLhC2ASeM1HwUJ8JIhtr2QRqMzgB9PJCjODWlpkFvb2sSQW8axxIMKq8CiUp8sIZxj50cYwPlQWG1FXgfSgfZYpxg1GYeapRG1AYeYVnzr4j8D+ROhH+6n60MCjW4zbuP71MxWjAv8AHEzZv7GMwaQ5p+K7SzcAn5U7aKsHg0oHmX+8KI0UiLqZSB70wcr8xU2kssLtdUMf0qMtqpQvq37CpV3IIrdXIGNqrxd5HlFHklLbtrgCOHc9w5rV3I3wBUkW6aFXv3NMjuQ6/l8w9aVpGAzt9KDZkcb9FvKoPYTCoW1I9BVYKswS1qSf5arhxRNcKy0/YuM8gEdwapuqdGk6ivhohDKr6HKjRg77mtLZxxvq1DJFSLkLHa3ZGP8AgSj7rpq1DiyKXNHj9z0a5iWUxxM6qMsQvp3qjeOVSudWQ3oeO+B617CsMJjKjAyMZ4Ptg1T3PQOnaGWOPDNvqc6jxjPzpEcrrk2SxJvg8ykG7bAnByTznOeKHpXC448uBggDNaO/6S3iS+EBoB06lyfMNiNu/rVUbCZNQwe/Hb5ZpvkQp4ZeivcqQgyTjy/c870zuTzvgZ7kd6kSW8ikgq2N/oefnQkh1ZZgTgjAPbPvRqV9C3BrsRR2G2Ml9988bA1xbDMR+XTjI9vlTjnJAIwTjI9fQGmZAXfO2RRADWOTgHbI3G30NMYgAEdm2/8ABTjg98g752yaGzBmAAwBVlCZGM875xinH8wONyOTSEEAjI5G/cmkBA/MDnFWQe2wA++B9cVtvgCza4vzc4PhW2QzAbGTnDEn5cA1iEDynSu5OQo4yfTNez/BvRH6T01XnKG5ucO5iYsgGOxPc8n6elBVkujS11OxSH5UVAWNwKTFOpKlEOFdSiuq6IeJvERQuDVxJBnO1QpLc7ms7dHcSIM0YkQnaqd08NyO2av9JUkEVWX0WDqxUTM+aHG4hCijfAHNCFS7eMsdgSx2AUEkn2AphjJ/SunX/UbhIoImEauviykeRBzkn19K9UjXRHGmSdCquTycDFZz4Usbu1tJpbhWjNwwZI22YKoxkj3rR5pUmWcaULSd6dVIjGMuFJp6cD5Uj/lIpU4HyFVJclp8BDxQGHmFH7UFz5hWfOviOwv5E+2/4D/9X9KSNA7qp70tt/wZPr/SkjbS6H0atGm/riIz/wBjJ62cS4OM0VY0XhQPtQJ7p49KqM5FPgd5FORvW6kkZG3dM66UNCwA4FVI20n61duMowPcVSsCCw9GNLmvYcSTeOk1ssasNVQYrfAwxz9qJSihu1Q1Sa4Q6NI0zvRNKtjAb6A0H/SrmJE8NDgbimRba2iZxTe59kUSkQmIIx2wNjUcRyfyGrXAHYUoUHsKpwsiZBtCVkK8bVH6xcS21sZB+RryxhnOMhYJZQjE/XTRGzHckn1H2qVcfgriC4t51EkVxE8MqHPmV1IPH3FFF0nFgSi2016Kh0K4I49qjPI+fXeg28t1byGxu21uufw1xgAXEI3AcdnXhvv32kOUyQSP8q4buLo7qd8lfcpERnSATnOBsc8mqG4WJWOnG+xA/wBav7tBjyuDt61RywtzydzzUux6SRWTwI+rYZ/8xVNPGsZOdhnHFaCQgAjO9V9xbhxkDf75zT8eRxfIrNjU1wUTAFmIz6DH+NCcjjPGxIyBn2FWM1lIoYqTnG44FVDhtTBs5B3zW2M1Lo5mTG4dji2cYHBxnt6VyhVzudxk8fvSwrK7aY1HmON+Bj1qT+ElIJBDY3JXGAPaickuwFCTVpENmyR7cYpPT/H0qXDZzXEttDFGXlncoijHIOMknAA9zXofw9/9P/CliverspMbkpaKQynAIy7evp2/rRJ2VJbXTKz4J+Fri8uIOrXiPFZQtrt1OzTyKcZII/LXq4UAAAAAAAAbYH0pI4YoY44okCRRqERVGAFFOokqF3YhpKcaQirBG4pKdikxUIcK6lHFdUIeZSKu9RXQHNFaQEnemsQBSpKztohPEDxVfew5Qn51bkgk0C5jDxtgb4NI6YUlcTJqp1Ee9br4Q6WhEvUJUBIYxQBhxjlt6ydtZtPexQkhFlmSNnYgKgY7sxO21er2lrDZ20FvCoEaIApHDerZFNbOY1Qff0rt6cKWgoqxlLkVzUOq6L7HtjBpY/yihng0SPgVTLSCGgv+YUXNBkO9JzL4sbh/kT7U/wAOQe/+FMBP711qfJJ/52pgO5pum/rQrUL/ACMtUktyis5GQO9Ne9gXZR9hVYTSE1r3GaiY19IcgDn1pttEs7yF6iZqb09sPL9P6VV32GiT+EgHb+tOFrb/AMv7UTxEP3xTwQKbSF7mQbyKONEKADcDYVLVisKH2oHUDmJfmKHHeqqKrKTgYoVSYUukTY2LDcURagfj1/ShrhfnI8horQFDLn/jt8qRfY0OSQyOXxyMUoNKfPQa6M3f9DnaW1e0vZ0MTqSjsxQYYnKf4ihdbi6lAoaCXHB2HtWnI1OFxy2PfHNU/VpUlnSPGFGxPr74NczJx2dTE91IxcafEV5MIheS+J5sByANtzjFdN07rUA/i3mTnOMtnJ27/wCdaySzVkWa2IW6g86tgfUD596o7+f4hkOgdNRsg4dWlZTgegHP1pkXJriiNQsqGF6B5pwxGB5lz/rUiMahuDx9Km2nR7+VDNeHwyTkRogXbG2ckmizwRQLpB34pU5eh8EvRTXS+WQ8eU1mpEkZiWyTqx9K1NwUIINVbRx6gQBtvTsUqQnPDc0RUgmigd4siRiqqBjUzMQAFqwggmEcevRqXUukHMjudtIVam9LTpyiS7nli8SMlQjsAYx6rq9fWqu+6t57iGwULDIAHlUbnGxCe3qalSnKgt0cUbbJVh1m86NJOlhLCjsyeJKIIpZSVBDLG7g4U5IOOatZ/jz4sYNouYYtZATwraHWP7rFTj3rIW8TyuM5C5HHr86lwwyPIzEDyM0aZ42ODitcY0qOXKe52y9h+IPi6U+JL1zqOdtSpKFQHnA8tXlp8S/E5XQLwSEcvcRRSuo/vFazsVppAyWL4BOdgPlirS1tmAzlz77aRjucb02OO+wHIvV+IOvqFLTxSFhnzQQhf/aoqbbfE9wCBeW6Oh/VbgpIPkhJB/aqOOMkhTxheBvueVHrUxIgAAF07jcb+b5/1p3jA3GutbyyvozJazBwuzqQVkjPo6NuKPishGZrSUXMDESKdIOMK691YdxWns7yG9QlcLKmPFiJyyZ7j1HpQNUQkrx9a6nAD966oUeOJIx709pDjmhMNNDLGks7oQOfWnCQHY1GLEZpA2aW1YaFliVidIGPlzRbO+6jZN/u9zJGuRmNvPEfmjZX9qapHenFM9s0NguCNn0nqR6hCTKscc8fKqww6n9aqTn51Y5HYj6GvNpbrwZ7XeSMxKsilNx4mo41j0FW8XVr+VfE1rjZYyq6dajlm9zQTnsjuMmTBXKNic0zeqD/AG9Ksa4jLOAAfShf7fvSyj8Phc7nPaopKSsRtaNIeDT4z5RVdF1KGVAP1EDapkL5XOKptBJMPQpO1PJochpeV3FjMSpku1O0nypmrc/WmW8ix51cMKIJLbPB/er02SKx02DqMcnO0hNVISaJrtfT+td4lr/L/WtPkh9mfxz+gWal2UiK76zgECha7T+U/Y07xbQfoP2qLLD7Rfjl9FjqtBvrHrzTxc24/UNqrBLaf8s/9tPWS0/5Z+1H54faB8MvoPezxSRgI2Tkd/eoGeKl+Na9ov8A204T23/K/YULywfsvxz+iJmlBNTBcW//ACf2FEjmjdtKwk/QbVFODfDKcJJW0QlDkgAEntUxYAilnIL8AdgTRyyrkgAdsbCgs2XVc48y7Hgd81qjD7M8pESWeOKe5I/QfD8vIOkcZrMdQmM9yFhVhgjJPYepq2kU3Nt1GfU2E6g7E9mjZQh39tqzl1ZXcUoYXN1AsuMjKkEjuCRnFc3V42p/o62iknH9ln064Z5p4WPniCnbkqc4q3UR6Sy8nn2PtWfsIYbZmfxXllkbMkkh83yFWL3SLkZz9ayJ7TVKNsj392ykqqms5c3BJbJyTU69uQxYKd96opn3NFGO5hXtQCWUkmorvgEdzT5DjJPHNRHfVxnHsM1riqMs5WAmy5VANTOwVRjck+lTVsGVAp9NTECpfTrIKRPMv8TBCL3jU8/U1b+HFhnb8kYLP2JxworVjx2rZzsk7ZTpbmBG0rhlVSPeeTZF+29WVjZBAqnBEYHr5m9aNHaeZC6adOqSTg6pZNz/ANowBVpBb40DSd8HAOCgP81aYwEuRHigOobkjI5/KM78YzU6OLCsxzjJAzkeUHcUeOBlVyCuQMjBBPruTtRLdA0Nud8SIHznJ38+5pyQpsbDG3mcjGRyRk5JyQMVLCKApJIJOwUc+5xSpERE5ycsR34PuKfoLKhzuMagMA/U1bRLBlVGMEHH5vN5RzjamxmSKVJkbwpAWMTrnO+5U9yPWiqME506e2QOc+hoUurxARoJYFRz884oJItF9bdWsniBnkWCXJDowJBI/UpA4Pb/AErqpSE2y2+ATpG37bV1BsC3GcmsQ2dqhSWDrnGa0BxTWRSOKzuJ3FIyslu6ZypqPgjsa1j2sb9hUSXpiEHalOIxMzxbFEjl3ANTJemyDOnNCWxkXciltBpkZrOa9vFWPOpwqMRjCRpsSQe1aCPpqoqqoIUKAAOABQbER2zlmxl8Bm9h2q+V006huAudqCS3cGXM3FlYOmj0py9PXOCP2qPc/EMUTvHHEWZTjfAGaMlz1eeLx41iVcFsZ7UPjoQslkyGyWMghcVOQMorHS/EvUIZGjeFNSnBwx3NTum/E63EqQ3EeguQAc5GfnV+NoryJmoBpG3FMLqE1jcadQx71ieo/FF8LiaK3VQkbFMtk5IoNkp2kFvjHlm5GNuKcCPUfevND8R9aYgeKqjuVB2H3q/tOpdPkhVri+bxCPMNWN6zS0s4K2aoZ4T6NbqHqPuK7I9R96wXVOqrEF/AX0jMeQNx/lVT/t3rY/8Aym+wooaSc1aAnqYQdM9U5pR3rI/DHWLy8aWC5bUyjIb1rU+IKTODg9rGxkpK0HFPFBRsmiiqRB4pwpop8cbSMFUZzyew+Zo4xbdIW2krY6NGkYKv1J4A9TU8BYlCDnbf1PvSKiQJgZPGpvU0CeVVUY31Oq/vzvXZ02n8at9nKzZnN0uh5fcA4Ofy/T3oSuzSSEcBio9dloUrhTESfL4gBI7UxXw0+D+USEE9hgVuSMxFsizWXUCVwGu305wRtjjG2KpupW3T1ZpReXNnMdjC2JoJMb5Cy8fIGrnpuo2U5LHLzM+wxjJPrUi9SOTo12rIJNMDOocZ3XfalZce9GjBm8T6MJHc3SyMoMckYGzLlW/7Tt+9O/FSbljnGRjNHm6Pf+DDcWUEk8cqBsQYZkyMkMhOfsTUBOndTkuILWSP8NJO+lTdAqBtnJC5Nct4Jbqo6q1EErTATzFyTnH1qBNKF51EndQqlifsK1g6FZW6yJO8st2N1ZtKQkHjw1Xv8yflVJe28kEjBmkVc/rGD+1aI6ZxVsyz1ak6RSiO7uDkRlV7eJ5R9uan29nDDpeQ6nHBwMD+6P8AGlEiDZNUj9wilmzUqG0uJyHmKxxk4IzqfB7cYpsMSszzzNoNbJ4zqFUlQcDGQfkDR8JJdQWkagiMG7uR20odMaZ9zv8A9NdO8VlBJOVxHHhVGRrdicKijnepPS7SS2ge4nCm7u3Es+MDwxjCxL7KP6mtSXozt+ySkQZ41IB3LsSc4GKlxIGZiANIOM5zkjemRqUWV8DLHY4OPpUq3VjgnAztjbORTQB0qqbe8YKPJDI2fbQTuBSwKAkK7aBDEmRnAGgDYUSU5t7kKD5lkB1Hc+UjkU1CqwSSsQESNGyTnJ0ZGO/yqygyMWjLAEvggAcbHAonCNqJA0nfnOBQYZEis7eRyBrQMcc5fzbZpLqRwmjILOACuN8Z3HyFUQWMBg748jaVzv5gOTg/1piqHkYlcgbZ7DHJNSACqRqAfKqhcYxvvg0FmCeVcg53zjzEdxiqZaCDO4BGAccZrqYqO2SjsQWOSOM+29dVEIAXmlK7UTG1dis52UwH5SaXxAeQKc8ZPFM8I0LQxMaTGeQKG0aNxii+AxIp4hK5pbiMTKya2O5Ap1k80WqJ8lMeXP8AKeRU9lPpTBDnBA3FIlEkvkqZkesxCC7cjh/N9ahC/u1TQlxIF4wGNX/xBZvLCsijzp/SsaTIjaWBB96OLTXJzMkJRZJZizFiSSTkk800MVYMOVII+YoatxTs+lELPQ+m3n4npwYnLBMGsBdj/e7r/wDc5/etD8PXBEVzDngHHp61QzBnvLoAFj4hPlBP9KXi4m0NyW4ICqZp5jwOKs7XpfUJ8eHbvv3YYH71ax/C/UZMB2jjBG/c1oc4L2JUJv0ZIgCm4rdx/Bttj+LcOTj9OBQ5PgmE/ku3HzANL80bD8Mim+GnMVzI2diBWsF3lsZFQbL4TltZC/4vUDj9IFWidEw2fGJrmaiLlO4nT07UYVIlW8mo1OBoENh4WPMT9alLE54BNLjil9BTyRHIpZlUcscVaIkcCaV5O7HuTio8FssXncgtp2UdqIzjBOcYyCfTNdXSYNi3S7OVqM257V0CmlJRSO533z3qBfyaLdnG4SWJj20rqGSaJKzGKcfqQsRj9Q5zUcyQ3dtMDvG8R1gH8uORXRSMY+5IMMhQ+YYkGM+bG+1KrqTM4GNcOrnA8yjO9U0F68avDIQzKjfh23xKn8p96l2Fwk8RKEkYdcHlfLnSflVkJHTSDa3I5xJp5wQcZ5qb+eKeMAANAy5O43XGah9OP8K5UnP8VsA8EEcZqRE+JGGBgrjvke9QhG6M4S3MbfmikKD3AoXWoJMLdRDTJCwdTnBGD6Gi2yvBczxjAUt5c87+9TrhNcbKxByABvyalEK6QLNbxS41axnA382OAKqLqAH9LDIKnI2z75NXNqrR6oX/AC6joO3f1pzwIzsrrx+Un71KJZlvB07KuMnnTvv9MUbS6ruoAU5Yg7bdzV61lbgMzAgAlsnGPnWW63PLLJH0u3Yapzh2X9EX6icev/nNVVKwk7I8Bfq18ly5P4KzcragbeJLw0n07VomGBHGoXzA6hzkZ70zptgkEEaqAEjAVBsBtxk80eNCZQBuQ25B2Ge3zo4qkU2dOuiOGMMCztgDPAGBz6VJRSqoSRkYB/lH+tRp8PeW8Y/9NNTbZ++amFhjscYwcY+e1QofLgRgMQATg+nruagXLBLCUK35oIwrHgbhSaN1CRkii0jBZwc75ORjioEhae0VADpHix5Axgqe5+tQomXZDXHT7CIEkrFJL/KsKAE4/ajSo0t5ACTpUahkbkCq57hR12I51LJYpuBsM42B96tJJo7fM/MzKqIrHkDsPaoQNIzGWKJMEsCZDjdF4B9MntUW7OJ44wCzbYXTuxP71Js0kCtLKAZpcswyMD0G21MVNU0kg8oUshbG/wBahA0aeXlhucgEgfsK6oxnlBZYkLKp05UZGeTvXVRAIrjTwm1dorOdlDkQGieECK5dqOpFQlghGBQpFAqQ5qO+W4qmEmDCq1GSIY4p0cZ5qQq42oXFBuRSdQiUq4YZBFYy+6Y8rN4UZZuRpFeiXcIdTVC1vJDJqU7Z7VlyRcXwGlGcaZkYPh/rcx2t9A23kOP6VcW3wdcMQbm6CjuIx/ia1lq2pQDUsL7VkllmuBPhgimsPh3p9hkqXdyMEu2x+lTksLKMlkt4gx5OkZNTsVxWkyk3yGklwMiQAjAA+QozLvSIN6KV4qYuiTGAUumiAUuDWhCgemoMkl+3VrKyiJSCGBr6+KqCZPEHhwwEnI33fb0FWRaKNJZpm0wQI00x/sIMnHz4Hzpllrhhe5nBW7v3N3cY5jDjyRAnsq4FVBSyZVCPrli8jUYbn/wSljGQCV1EFgvc4ogeIAaRj1A5wdsj1qpub3w25EmNyudMnsVag2PV4bqRbfX/ABlZzuMZAAIPz9a7EMcY9HPnOUuWXbSkY4IORzzUeaVQCeFbkf5moZulaSaI+WWPDsG/Kyk7HH+NQ5btxI0Tl0bJZUcc7ZyjcGnKIomeLjOcHAIx6g9vnVO8kto8yoA0E2QVK7gkcgUB+rhnMZ8rICGDZVvnj0qrvusHYMofSNiHA59ajkl2Ek2cJZYS8UoZodZMbDGoE7gjepfRb9V6g0BO05YkHYmQDOMcb71RQS9T6rcCDp9qrOSNbFmMcQ/mlfgf1rU2XwraxNDPeXM010kiygwHwokZdxgfmP1NZZ6iEOzRHDKRcWZEb3CZziTUe+MnG+KMxKTM2RkjIGN+ffbFAP8ADnPqd8jbvyafcaQCc7suM43PtmtKaatGdpp0PmUCVZA2CQCDvufkKl6tUagDfbONsY5zUUEPEhJX8ukE8feiq48IjPueNqIoHKVBDYUYH5gMk/4UxrhGxjGV3y3r7ZrmAwTkAAnbHPfegBQwJwTvqB49sb71ZAd7diK3eSXbnSNJPm42zt+1ZPp0f4i4uL195JXIVm30oDtxU/r87sY7VCPMAGCDbnnPNG6PbBmjUBdMajA2zj6VXbL6RdrH4dsST5mUKPbud6Zarl9RAA/NuePrinX0ulERTgcn1J445plsfDtbmcsMBQBkYyfeiBIQYSdQuZM6VAVcY2OBvUsvlgFJ1Z5XcY+u1VNnJmWeViSJGwNsjOe2anxtrnVcDO2VyDj222qix3VZB4canGfLnPAPPbvUO2ybW4OeZNeT6Yx5e+Nt6f1l8SxDYADg4IB4oNkzOsqg51Ly23GNgOMVaKK1ZtF/DI7Ki7rk5wFwTt7elazwPFmR3HkWNAp32wMkLn9/nWH6yDB/EUhgrAED+Ukdx+1bHp95bX9rDdI50ODq3wQ68qTVe6LLMDIC6uRjA423xUGWWQyPbQ6WyzB2JOPfOO3rUkyMYXeMFixKIFGD/KdzQ44xbq22qWQ7ke3A+X/nepRQWJPDRVUEAerYz77V1cAxzq2Oex24966oQjgjFdTQaeMVnOuhBkUVTimV1UEPJzSogJpo7UZMVCdDwmBTGbBorEAVEdt/rVEiJNJsarpGU5BqXNkiq6QEE5zily5HxHpcpCecCpkV/C36hWdum5OahCeQcMawzihqhZu45EcbGiYrK9O6hIrqjk4OK1cTCRFYVlnGhco7WKgoV5e21igefxCSMhIwC2PU6iBQ+oyvDCNDMrOWGVyDgYzvWM6peMdQMpLDCDUckj670MU/Rahu5Zs7HqnTOoFktpj4ygloZV0S4HJC75HyNWFeQ/iXtZoZY5XSUSAxSIcOknYqa9B6B8TWd/8Awb8iG9jjd/Kv8KdUGWdMbAjuD9PStHSt9Ccka5iWd+EklsunEjDlb++PbwIm/hxE/wBpv2FDu+oeExwxLHc5wRk+lRbfqFrKt/deNE13dSmWWJSDJBDH5I4yvOw3O3JqjvroSmQDIYnOQecfpNP0q2Q3vuXP/hkzfKW30iZ1C5iltDdRDS0UgS5RTsFbhhWVuL2aCWO6hYiaNhIjdiB2OKO1w6JdLuUkiKuDj12zVLNJlcZOxI3rXu9idpdJ8SSTurXLlJVLGC6QA6UbcxSIOVFOfq91c+Gj3KxpHkwvE5ZNRx+ZCM4/pVL0Tpc/V7o2/wDFitl1vLcKmVRQNlUttkmt9bfDfw/Bbrb/AINJMZ1yy5MzseSzqRS5avZw+Q4aZyVmMurnq13eWtq0CS3aqUhECESSKfNqJB49+Kr3nk/2jb2NxCmRcpDPgsdWW3GQa9Rtun9Ns2Z7e3RJGQRmTdnMY4TUxJx7V5Z1Dy/EMh9OoIf/AHClLP5G6GvD40mz1q2gtraGOG2hihiUAhIlCrnG5wKNqoKN/DjP9lf6U4tXNts21QyYHIcbY5PfHpSkkxDYNjOMb70kh1K49ATTY8aSue2SO+fbFd3Sz340cnUR2zYSBmKOuNsEYx6dqMhVVk2wMcAZPFQ0ZllJGdwMA7Df0ojMRq053zqAIz+9ajOIXAUlsgNyNwPtxQnlPmwdP6mx6cDAoEr+ZwMcjbJz8jj1oYb82CBsDjcgk/PeiKKDqD+LfytyMhAdjpUdh71oejxmOMu2y41Ln0HuKz8xL3pQE4yASBgZ9BWmjK2tkW1HdcseBjGeKFFshX90XnKg7dyRjn96kdQl/D9NhiH53XLkbYz6Dn1qmtpJL6/jCKFTxMkE7lQcnNSOv3SNIsSNqCbAZGkN6bd6IojWOFXVqYE6mJP5hkY2HarXp2DLrUNgDJyRnHrVNbhQrHGV99s+tXdh+SR+AqYOFOw471aIys6vLqvCo05UAYznc75rrFxrJ8xLE59vXfioV5N4lzK2CRq2yBqwNuBRrRm1AA4IGRgnb7VF2UM6xH4lvNhfyjkcZ38tP+EbmKNrmxncAS6bi1DEAMQNMiDPfijXq60BGTyWz6/WsyqlXmiGQ8UhkibggHcUM+JWWuVR6hrXSeFCjAwMHfYDFNGQC7tuqlgBgAAdjmsf0brTQloOoXEjW+dUbvl2i9R8qteu3rGK3tLWQqb1kGtTxE3cEfaiTsF8Cy9bunkcdPtfGhjPhtL+lpBudORwK6rKztoLW3hiVQAFBxt8t66r5KsaDRBQ0omKynWQtLTacDUGC54oiGhYp61AmEJztTSu1IDvRAMiqK6AMm2arLshQfrVy4wDVNfKSD9aXPobBmeuZCXIqOASaO8TNIc55oiwHHFYWrZrXQkSMCCOc1qulXWpAjnjA3qgiixjapluzQurD7UuUbQMuUG6rdyo91KfMEZ1iXOyhQQOf3rz+e4nllMkzamLatXOSK1vWZpRCSqFmfJJB2XfNYebXE+ST4chyf7DH09qkI0JyNpA7t3FxkMdDaJowfvj6VobBjBZy3agG5vyILQE7LGPMzn2zv8AQetVLWklxFaRkFDJMghcjGUkOGIzv71etERL4g0xwW8AtraNyAVTbLkZ5OP3pWoSlUP+wsKauTIObiIoxkKzIcrIv5vXOasY7g3UCSNgStqVuwMiEggCqyVsmRyfJGGY5OBgb8+9Qk6kI4Ft4yJJmd5HYflDu2o4xvt2rbgjJmPUUnSJt5cLHqVmxkjftjuKqyZ7jCwghe7N3+Qq3suidY6m0crWdzJt5TIhijHyMuBitRZ/B18QhmmtoFPKoGmf9sL+9aXH7dGaNeyH0jqnUEgihmkj/hqqJkKMqNgMCtDDeu4GoLn2qVZfCXSIsNcG4uW/tv4af9seD+9XsfTOlRoESxtlUcARjP3O/wC9KnpoS6Y1ajb6KVG1cenrjevOOr9A+IB1Z7tbCaS3e6jcSQlZBp1Dcqh1ftXsR6bYn8qun91yQPo2apuq3Nl0tjGkjXFwCBJGAESHIziWQZ374Az8qSsLxcl+RZvijoYmMUfbEa51badu+aYz2S/mvrQb4x40ZP2BJqjmvri9VtTkxqDpRRphBHc+v1Jqrt2ILKoQYJyQM/6VmeyuEa1jm3bkahr3pqkj8bE3P5UmPb2WoR6pbxFWVJpFBOrSqrt7BmBqtYZx/G4G+y5oWhX2Zy2OAT/gKPFqHjW2Kok9NGbuXJcDqvTJNzJNH5dw8LbEHjykiinqPSGwfxkYPoySDf8A7azDxwq+Q5H1pCpONJJrQtbNCXoYfZfTXllqfRPGQdwQ67mu/GW22JYQ2Mj+IuwAziqMKcjIB7cUUQowB01f5zXon4C+wsPhPeh3lRQGDFi6hSSexNTeq30YtvCgk1s2zCNg/l77iq4W4ztwfkaf+FbPl+1Ra9/RX4EfsnfDlpNpuLwjLbxRadJfWNz5T7EVA6ha9UaaRvwN3pLDL+CzbA9tORV50MPBBeKwYf7wkg3xygBx9hVyJd8ggeYDJPr7VuxZXkipfZzsuPxzcfoxMfiIER45VywBzG49hyKu7eXw7R5MhcKdGoEDy596vVkJJBzjGPbjtSkjhlG+xyM9uOKepUJo851y3M00iJLISzNqjjdl33P5RUqO26hFEt09pcpbnH8WRCgOeMg74+lb18GNeFVWGFGAPTgdqiPJoSPxPNE8j20isQQRny6gfaqT5slGVkkDICSCSMDSRttxms/d6luEmCuyYMcjIrFVI3AZhkVv0sLCF2VrWJ42bMZkUMAf5CD6dqmqY4lVYY1iAwdCqFQ6jyVG2PpVze7oi4PKpHlZXMKTS6hpJhjdwMnuUBq36XF124itoXtLrFrNGLN5ojEpt3UsQJJANlOcfOvQFZBqC4jbJOFUKpY85VcCmFzko3lYjOQdiee9AotO7CbtUIkDKkauQzqqhiGCjOOADvXV2uQ9uMDfBP1rqO2BRFU0YGo4ogNIOoEpN6QU8VA0cDTwabXVA7HCig4oYriaooe5yDUGdAwNSic0JxmhasOPBTva4YnFMMYHarSRAAahMp1E+9Z5RoepNjY4xihSEqdqOXCj3qPkMaWwl3yOePxo9LDbByPWst1Sx8Njt5Gzitem3FMn6G/VFYRXggcggaoRIAfXBNCoX0BklSso/hyFzY3N3L5nhla1sXAGtFUDW6se+TpB9jVffJ4FzIhkLq+H8xy4LblT7itVcdF6z4NmtjrhggtY7ZERdM7qowXdfygscsR71Ai+E+sOxaS3kYk5JcgE+5LVaxyu5IzPMkqTKa36fFelUm1mEEMYwxAY/wBvTvWy6T0vp1oFMFpBG23mCLq/7jv+9Esfhu9h06o1T13Wr2Hp0kY8xFMp+jO5J8s5M7f1/wD7UpKEvha5UTVJ4MpglMSlgkoUOVPyBFSY41dVdWBRhqVl4YfOiihbYRWPrTwx9aQKAKXAFOQoZPLJFE0iK7Fd2MYJdUGSSAN/8q88vDFcXMjzyN+G8R5Eh3VWLsWy/citn1i8jgtrqN30K0LAtqCE6h3YkbduawS2Nx1fxZxIRZQsqyzLw7caUbjbvzzWXO3Lg6GlSirY+S9abNvYW4lcgqT+WKMAbajsMV0dg0MbNNJ4spBLY8kYz/KPSmeMLWX8JaIZHbaKKEFiQO+B+9S06R1O+815M9vFyY7cK85HozMdA/essYTlwjZKcYctlVDIiuwaQYBxuQftRjJY7nxUDH3G/wBKlz9K6DDlEt3YgYJF88hJ/tlds/SqmS1sY5VAt0xns8rEZ2wSxqTxKPbKhklLpElngfKxhW9xjA+tNHhod+eP/M05IYwQEVUA4A4FEeIMAc5bIpPA5fs5VLbg7UYLjNOjiZQoOMH9qK6Kp7UNWTcgaEE7nFWFui4Das71USsEIwe+9MW/KuYovEllVcusKO5Xv5ggOKOONvoCWRLs08ZQkhcA+IhyDjcgjBqSM7gg5yvmOMnB71R9FvVmW+JyWSWKNw4ZSNSsQCGFXOSPcHDAk8D0rt6eLWNJnD1Mk8raCFmVtLZ9iduOcEUfxBliu53O3OdqArgqNS5IzgZycniu/KGHsBv6nitBnJJJ0nIGdO+PTmozrFMLyGTOCyOM4yGMYIIx8qesh/ISACrEE+2SM1Hdj4jYbcxxyb4x5WZTzUKGrJpxDMQScBWPDKBw3vT8MpynnXScqc6gvfGe1JIkUyEuN8nb032IoIM8DAPl41/I3Lb8K2KsgfUsgGhyWG23fuNXypxbV4esZAyTxkY9DUcSRPujENy2nIPzNK0hjCKR4g/sjfnBzUIcUbLaWGCcjUN9x7V1KsqEEhcgnY5xXVZAanNPFBU0UHNZzo2EFKDTRS96gaYQUtMB4p2ahdjs03NNY0maoMcTTC1ITTDvVBIRt6E6ii0mM0LQaZAkQ0JUwd6sXUY4qK0fOKRKI1MYjZbFWMJePDKd8ZqtiUq29WKttipFFTpqi2tOp6iEc4PvVosgfBFYiebw2+tFh6rfw48Gcbb6ZUWRT7HO/wC9SOTmmZp6a+YmzaSOMBnZEXUqAuwUFm4UFu57UNp/4xgGVl2IUjGsH+QnY4796wfXuu3d7ZLaT2cEYS4iuFuop5cK0YYYMbDO+ezVcdM6n0jqUNrHPKbW+nhV44r5tKXCL/DEltI2AQceufnTXuXqzLLFtXJo42X+IsaquGYuoULljySPU02OGKHX4S6fEdpXALY1ucsQucD6etQZfx1uuHhMwBBjkZn1qPQSKcn60WK/icKsuImZggLnylvQN6/OpV9C6omZrgTSA8BsAncA7ah6g8U6oUKURwA6I450uqsPXhtqp+pWfWJYZIbRLdtflVnm8KNFznJTSTmrcZp2oHmqcVLsOE3DoobHpV306BmcWaMQDcSwq0k0nqWd98ewAFV3V7qHwov47kMx8utVRxj+Qbmtj29vvTVSJTqSOJW/mWNAfuBmhljtUg4Ztr3SVnmVvadWuWP4WxvJEY7MsDpH9XkAFW0Pwp1iXDTeHCf7TqcfMLk/0rdlmOxOaTNVHBFdhz1U5dcGQX4QuxuepBT38O3Q/wDzJrv/ALY6lHtDdWr7bePDIDn1JRq1+1KNqZ4ofQrz5Psxg+GOunm7sV9Ssc5/YtRh8KdQf/i9TQbcRWx2/wC9zWuyPWu1elRYofRTzz+zNw/B3TgVN1PdXPqruI0PzWID+tX1vYWNpEILa3iijH6YkCL8zipANc0ijbn2HNGko9CpSlLtlVedN8YHwWiikLZJaMurY4DaSDUdOk9SAxrs9v5XmH/yU/1q2Lsx2x8l8zffingSYHmC/LzH/Kmqb6FtFO3T+oxhiUgckf8Apy7n56wB+9BdJ4gDJbXA1EDMaNJvkbnw81oFQZHLN6tuftQ7q9s7JC93cw26jtK4DH2Cfmz9KOMm30C0UBeIHcMpUNtJHJHnBzy61D1wPOqCRNQhXbVuQzHkVLn+NejI0ixxXMiqMLJIFRHPH5d2A+lR3ur3rUbCJI0ikT/0IBGQN+XcF/3pWpzrTJb4vkXuXrkMeARnyqO2MHIxiuIzsfzeZRtkE7nNRbf4YuIvMnVb6E5zpSQsPrr2/apo6T1SMAJ1UyYAAF1bRSDY55TSf3q8OXyK2q/3C5IckAKggsGPl29c5oLG6UnIzp8vucc7VPax60NiLCUDf+G80DH6OGFDNr1MM+qykIPBjlhc8c8g/tWjj0yENbgADyt7YUnaurpIbwttbTKQAGUodj7V1WWOUjFGU1EjbIFSFrKb7Dg0tDFPBqBIWuzSUhzUDQpNKDtSDelIwKgdiGmb08UpWhCsDmuFOZcU2oGhWxihAbketEOaaBvnvQtBoGyY3FJr5o5BIOfSohVg+MbUpqi0yHd6iaiB2HFWE6jB9aglRk1myLkfEcAJlKtg+zDINQ08DpN2/UGsbeaWOFYbQ33jS21soOS0axEYPYenap0a43FGyGyrDOfWjhqJY/2gcmKORUyNa/GHXYSWawtZoDuD0qWQKo9GjlLr/Srfp3xf0bqkyWk1tNDdy6kVPBGZCN8YUmM+/FUNx0azkLsqGN3UgvAxjYg8g6ar5OndTt9DW8yyCPBQSqBIuOMOmD+9aY6zBPia2swT0k4/x5PRlxboUs72FUJ1tDcrgDPI0TbD/pYU+DqHUI3K3dnDJbH8s3T3dio94Jt/s5+VYWH4o6nbkp1C1LDgvoDj55H+Iq3s/i7pBwGtJ4l7y2RSRRj+eAnPzwK1Rx71cHuRjlGUe0bSCe0usi1uY5GX88an+Ivs8bYcfUUUqw/MpP8Ad3/bms+lx8O9V0Sx3NpNKu8bRv8Ah7yP6Ehx96soD1CAYW5NzFzouseKvoBIMH75oJY6F2/ZOG/5WHy7/al89MW5gbAlQxt31Db6MKLjUMxuCvbPm/cUva0XY3LUmo+9E4BLA7fy70FpkGfI31wKhY/Jrt/egiYnIVF+5J/auAnc75x9h9hvVkDagO4zSGVRtnJ9AN/tSLCv6iT7DaneRB+kD6CpZR2qVhsoUerHf7CuCD9RLex2H2ob3CKCRwP1MQq/vUczyynESvID3X+HHj+825+1XTBbJxkjTYkD2HP2FAe8RCVAy3GOWz/dXegi2mf/AI0mlTykIKj6scsfvRoYY4M6Ngedhn781fCK5ZU9Rj+IL9cWd3PaRAHUq6IzL6bx/wAQfVqoLf4T63czMbySKCPO8gYzTOPbV/jW78Rds/SkL+mCO++9aYamUFUUhMsKk7bKmy+GuiWOGaHx5Qc+Jc4dh8hx+1W4jiCgRhQANhsMU0eq6h65NO9yMn1pE5ym7k7GRio9DTGzZwfptimmJxgkcfy09pgpAJyfRdz+1JrkbgaR6nn7UNhAycc7fOmGQb9x+1OeSMaicPpzqZyAi/MnaqHqHW7KPyQN4rZOp1GI1/u53NNhjlN/FFpWXHjLvkr9f9a6sY9/4jFmlyT6tj9q6tH40y9rCRvtUtHqDH/lUuPtWM0EkNRBQ0owqgkKK4inLT+1QJEfcU4HNPNKOKgdg9809a71pV5qghrrkGgFSPWplMfj61QUWRxilxTjSjgVAwfFCYDc0c02hZaKufJzUbQTVjNjeo3c1lkuR6BKMUpAzml7muakDESEXUtcY0O1Ft/yiuP5jWbMq5LXLIz2kLrgqCO4OKq7joNrISyAxv8AzRnSf2rQJya5seb6UuE5QdxYMkmuVZjpumdShOpdFwF3BcaZR8pF3zU+x+JeqdOxFMHaNRjw7wFgPlKozV23NVnUQpRth9q6WH/U8tVkSkv2Zsmlg1a4NBYfFvR7nCXUbWrNjzE+LbnPow3H2rRQNDIgltZVZDg5hYMteKxbXLAbAk5A4rX/AAuzC8dQxA9ATj7V33gjLF5Vx+jlThtdHoHiScMpI9RsaYIbZmLMDknucijj8i/KmvWFxsXYqiJBtpAppnThcsR6cfeo8/5o/lSXW0S42+VCol2Oe8AIUEaj+lPM1NAupNyBEPV8O/24rrEDSTgZ+VTlAq3wQipbQ7M+Xb+aTf8AbipHlUcUknanJVXZAZbOdJXPvTDnOCD8waJJjalHFUQGNX8xx6GlAUcc0+kPH3qyhhkVeSc+gppaRu+lfbmkj/O/1oV5tDJj0NEkUKZ4ULJH5pODvx7sxqqvOv2sAMZfx5VJBSHaMH3f/KoF+WHTXIJBLYODzvWd/wA636fTxycyDir7Jt91S9vdpZNMIOViTyxr9O9Uk96Fbw48ySnYKnb50e6z4T/3TUXpgGWOBnJ3p2rz/i47gh+OKboaLO/l88kxRj+hOFHpXVdDGK6vNvW5m73GrZH6P//Z"
                  />
                </div>
              </div>
            </section>
          
            <div class="h-24 w-full bg-yellow-500">
              <div class="mx-auto flex h-full max-w-7xl flex-col justify-center space-y-2">
                <h1 class="ml-5 text-xl md:text-3xl font-extrabold text-red-800">Our Top Teachers</h1>
                <span class="ml-5 h-1 w-36 border-b-4 border-green-800"></span>
              </div>
            </div>
          
              <section class="mx-auto max-w-7xl mt-12">
                <section class="mb-20 text-gray-700 mx-5">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                  @foreach($teachers as $teacher)
                  <div>
                    <div class="block rounded-lg shadow-lg bg-white">
                      <div class="overflow-hidden rounded-t-lg h-28 bg-gradient-to-t from-red-900 to-red-600"></div>
                      <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                        <img src="{{asset('storage/profile_pictures/'.$teacher->image)}}" class="h-24 w-24" />
                      </div>
                      <div class="p-6">
                        <h4 class="text-2xl font-semibold mb-4">{{$teacher->name}}</h4>
                        <hr />
                        <div class="mt-4 pl-2 mb-2 flex justify-between ">
                          <div class='flex flex-col items-start justify-start'>
                            <p class="text-sm font-semibold text-gray-900 mb-0">{{$teacher->subject}}</p>
                            <p class="text-md text-gray-800 mt-0">₵{{$teacher->price}} / hour</p>
                          </div>
                          <livewire:comment-and-likes :teacher='$teacher->id' />
                        </div>
                        <div class='m-2'><a href="{{route('teacher-details',$teacher->id)}}" class='text-red-800 px-2 bg-red-100 hover:bg-red-300 rounded-md'>view details</a></div>
                        <div class='m-2'><a href="{{route('book-appointment',$teacher->id)}}" class='text-gray-800 px-2 hover:bg-gray-300 rounded-md'>Book Appointment</a></div>
                      </div>
                      
                    </div>
                  </div>
                  @endforeach
                
                </div>
                
                <div class='mt-4'>
                  <hr />
                  <a href="{{route('all-teachers')}}" class='text-2xl text-green-800 border-b-2 border-gray-600 w-[130px] hover:text-3xl'>view more</a>
                
                </div>
                </section>
              </section>
          
              <div class="h-24 w-full my-12">
              <div class="mx-auto flex h-full max-w-7xl flex-col justify-center space-y-2">
                <a name="about" class="ml-5 text-xl md:text-3xl font-extrabold text-red-800">About Us & Our Mission</a>
                <span class="ml-5 h-1 border-b-4 w-2/4 lg:w-full border-yellow-500"></span>
              </div>
              </div>
              
          <!-- Section 1 -->
          <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
              <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">
          
                  <!-- Image -->
                  <div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                      <img src="https://cdn.devdojo.com/images/december2020/productivity.png" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 ">
                  </div>
          
                  <!-- Content -->
                  <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                      <h2 id='aboutUs' class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                          About Us
                      </h2>
                      <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                          We are a group of students just like You, who saw that there is a need to create a platform that will make our lives and 
                          your life easier when the need arise that you need someone to tutor you at your own convience. <br/><span id='aboutUs2'>Find Our names below</span>
                      </p>
                      <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                          <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                              <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Augustine Asante
                          </li>
                          <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                              <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Victor Owusu
                          </li>
                          <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                              <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Esther Owusuaa
                          </li>
                          <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                              <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Anita Agyapong
                          </li>
                      </ul>
                  </div>
                  <!-- End  Content -->
              </div>
              <div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">
          
                  <!-- Content -->
                  <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
                      <h2 id='our1' class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                          Our Mission
                      </h2>
                      <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                        The Internet and Emerging Technologies is dedicated to supporting Us, 
                        contributing to teaching excellence, and enhancing student success through: exemplary apps like<br/>
                        <span id='our2'>AAMUSTED Student Teacher Finder.</span> 
                      </p>
                      <ul id='our3' class="p-0 m-0 leading-6 border-0 border-gray-300">
                          <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                              <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Just hop on and find a teacher
                          </li>
                          <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                              <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Just sign up as a teacher and start making extra cash
                          </li>
                      </ul>
                  </div>
                  <!-- End  Content -->
          
                  <!-- Image -->
                  <div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                      <img src="https://cdn.devdojo.com/images/december2020/settings.png" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32">
                  </div>
              </div>
          </section>

          <!-- component -->

          
{{--           
              <div class="h-24 w-full my-12">
              <div class="mx-auto flex h-full max-w-7xl flex-col justify-center space-y-2">
                <h1 class="ml-5 text-3xl font-extrabold text-red-800">Testimonials</h1>
                <span class="ml-5 h-1 w-full border-b-4 border-green-800"></span>
              </div>
              </div>
          
              <section class="mx-auto max-w-7xl mt-12">
                <section class="mb-20 text-gray-700 mx-5">
            <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
              <p class="mb-6 pb-2 md:mb-12 md:pb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam
                iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
                porro a pariatur veniam.
              </p>
            </div>
          
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
              <div>
                <div class="block rounded-lg shadow-lg bg-white">
                  <div class="overflow-hidden rounded-t-lg h-28 bg-yellow-500"></div>
                  <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" />
                  </div>
                  <div class="p-6">
                    <h4 class="text-2xl font-semibold mb-4">Maria Smantha</h4>
                    <hr />
                    <div class="mt-4 pl-2 mb-2 flex justify-between ">
                      <div class='flex flex-col items-start justify-start'>
                        <p class="text-sm font-semibold text-gray-900 mb-0">Product Name</p>
                        <p class="text-md text-gray-800 mt-0">$340 / hour</p>
                      </div>
                      <div class="flex flex-col-reverse items-end justify-end mb-1 mr-4 group cursor-pointer">
                        <p class="text-sm font-semibold text-gray-900 mb-0">0 comments</p>
                        <p class="text-sm font-semibold text-gray-900 mb-0 flex">1 <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                        </p>
                      </div>
                    </div>
                    <div class='m-2'><a href='#' class='text-red-800 px-2 bg-red-100 hover:bg-red-300 rounded-md'>view more</a></div>
                  </div>
                  
                </div>
              </div>
              <div>
                <div class="block rounded-lg shadow-lg bg-white">
                  <div class="overflow-hidden rounded-t-lg h-28 bg-yellow-500"></div>
                  <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" />
                  </div>
                  <div class="p-6">
                    <h4 class="text-2xl font-semibold mb-4">Maria Smantha</h4>
                    <hr />
                    <p class="mt-4">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg>
                      Lorem ipsum dolor sit amet eos adipisci, consectetur adipisicing elit.
                    </p>
                  </div>
                </div>
              </div>
              <div>
                <div class="block rounded-lg shadow-lg bg-white">
                  <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #7a81a8;"></div>
                  <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" />
                  </div>
                  <div class="p-6">
                    <h4 class="text-2xl font-semibold mb-4">Lisa Cudrow</h4>
                    <hr />
                    <p class="mt-4">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg>
                      Neque cupiditate assumenda in maiores
                      repudi mollitia architecto.
                    </p>
                  </div>
                </div>
              </div>
              <div>
                <div class="block rounded-lg shadow-lg bg-white">
                  <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #6d5b98;"></div>
                  <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
                  </div>
                  <div class="p-6">
                    <h4 class="text-2xl font-semibold mb-4">John Smith</h4>
                    <hr />
                    <p class="mt-4">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg>
                      Delectus impedit saepe officiis ab
                      aliquam repellat rem unde ducimus.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            </section>
            </section> --}}
  
            <footer class="text-center text-white" style="background-color: #f1f1f1;">
            <div class="container pt-9">
              <div class="flex justify-center mb-9">
                <a href="#!" class="mr-9 text-gray-800">
                  <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fab"
                    data-icon="facebook-f"
                    class="svg-inline--fa fa-facebook-f w-2.5"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512"
                  >
                    <path
                      fill="currentColor"
                      d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                    ></path>
                  </svg>
                </a>
                <a href="#!" class="mr-9 text-gray-800">
                  <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fab"
                    data-icon="twitter"
                    class="svg-inline--fa fa-twitter w-4"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      fill="currentColor"
                      d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                    ></path>
                  </svg>
                </a>
                <a href="#!" class="mr-9 text-gray-800">
                  <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fab"
                    data-icon="google"
                    class="svg-inline--fa fa-google w-3.5"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 488 512"
                  >
                    <path
                      fill="currentColor"
                      d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                    ></path>
                  </svg>
                </a>
                <a href="#!" class="mr-9 text-gray-800">
                  <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fab"
                    data-icon="instagram"
                    class="svg-inline--fa fa-instagram w-3.5"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                  >
                    <path
                      fill="currentColor"
                      d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                    ></path>
                  </svg>
                </a>
                <a href="#!" class="mr-9 text-gray-800">
                  <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fab"
                    data-icon="linkedin-in"
                    class="svg-inline--fa fa-linkedin-in w-3.5"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                  >
                    <path
                      fill="currentColor"
                      d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                    ></path>
                  </svg>
                </a>
                <a href="#!" class="text-gray-800">
                  <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fab"
                    data-icon="github"
                    class="svg-inline--fa fa-github w-4"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 496 512"
                  >
                    <path
                      fill="currentColor"
                      d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                    ></path>
                  </svg>
                </a>
              </div>
            </div>
          
            <div class="text-center text-white p-4 bg-red-800">
              © 2022 Copyright:
              <a class="text-yellow-500" href="https://codegod.codes/">codegod made it.</a>
            </div>
          </footer>
          
            </div>
           
        {{-- <script src="node_modules/preline/dist/hs-ui.bundle.js"></script> --}}
        @livewireScripts
        {{-- <script src="{{asset('my-assets/autotyping.js')}}"></script> --}}
        <script type="module" src="{{asset('my-assets/rough.js')}}"></script>
    </body>
</html>
