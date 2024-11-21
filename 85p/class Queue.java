class BubbleSort
{
    public static void main(String arg[])
    {
        // Initialize variables
        int temp, p, c, noofChecks;
        
        // Array to be sorted
        int T[] = { 20, 45, 10, 11, 60, 70, 30 };
        
        // Set initial values
        p = 1;
        noofChecks = T.length - 2; 
        
        // Outer loop for each pass through the array
        while (p <= T.length - 1)
        {
            c = 0; 
            
            // Inner loop for comparing and swapping adjacent elements
            while (c <= noofChecks)
            {
                // Swap if the current element is greater than the next element
                if (T[c] > T[c + 1])
                {
                    temp = T[c]; 
                    T[c] = T[c + 1]; 
                    T[c + 1] = temp;
                }
                c++;
            }
            
            p++; 
            noofChecks--; 
        }

        // Print the sorted array
        System.out.println("SORTED DATA");
        for (int x = 0; x <= T.length - 1; x++)
            System.out.println(T[x]); 
    }
}
