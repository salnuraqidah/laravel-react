import Authenticated from "@/Layouts/Authenticated/Index";
import SubscriptionCard from "@/Components/SubscriptionCard";
export default function SubcriptionPlan() {
    return (
        <Authenticated>
            <div className="py-20 flex flex-col items-center">
                <div className="text-black font-semibold text-[26px] mb-3">
                    Pricing for Everyone
                </div>
                <p className="text-base text-gray-1 leading-7 max-w-[302px] text-center">
                    Invest your little money to get a whole new experiences from
                    movies.
                </p>

                {/* Pricing Card  */}
                <div className="flex justify-center gap-10 mt-[70px]">
                    <SubscriptionCard name="Basic" price={20000} durationInMonth={3} features={["Feature 1", "Feature 2"]} />
                    <SubscriptionCard isPremium name="Premium" price={60000} durationInMonth={6} features={["Feature 1", "Feature 2"]}/>

                </div>
                {/* /Pricing Card  */}
            </div>
        </Authenticated>
    );
}
