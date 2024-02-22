#include <iostream>
using namespace std;

float Calculate(float x) {
    float water_remaining, water_per_day;

    for(int i = 1; i <= 7; i++) {
        water_per_day = x * (1.0/3);
        x = x - water_per_day;
        cout << "Water remaining day " << i << " : " << x << " Litre" << endl;
    }

    water_remaining = x;
    return water_remaining;
}

int main() {
    cout << "Water in water tank = 5832 Litre\n\n";
    float remaining_water = Calculate(5832);
    cout << "\nWater remaining in 1 week " << remaining_water << " Litre" << endl;
    
    return 0;
}